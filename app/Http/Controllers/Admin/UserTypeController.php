<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyUserTypeRequest;
use App\Http\Requests\StoreUserTypeRequest;
use App\Http\Requests\UpdateUserTypeRequest;
use App\Models\UserType;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class UserTypeController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('user_type_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = UserType::query()->select(sprintf('%s.*', (new UserType())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'user_type_show';
                $editGate = 'user_type_edit';
                $deleteGate = 'user_type_delete';
                $crudRoutePart = 'user-types';

                return view('partials.datatablesActions', compact(
                'viewGate',
                'editGate',
                'deleteGate',
                'crudRoutePart',
                'row'
            ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : '';
            });
            $table->editColumn('image', function ($row) {
                if ($photo = $row->image) {
                    return sprintf(
        '<a href="%s" target="_blank"><img src="%s" width="50px" height="50px"></a>',
        $photo->url,
        $photo->thumbnail
    );
                }

                return '';
            });

            $table->rawColumns(['actions', 'placeholder', 'image']);

            return $table->make(true);
        }

        return view('admin.userTypes.index');
    }

    public function create()
    {
        abort_if(Gate::denies('user_type_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.userTypes.create');
    }

    public function store(StoreUserTypeRequest $request)
    {
        $userType = UserType::create($request->all());

        if ($request->input('image', false)) {
            $userType->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $userType->id]);
        }

        return redirect()->route('admin.user-types.index');
    }

    public function edit(UserType $userType)
    {
        abort_if(Gate::denies('user_type_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.userTypes.edit', compact('userType'));
    }

    public function update(UpdateUserTypeRequest $request, UserType $userType)
    {
        $userType->update($request->all());

        if ($request->input('image', false)) {
            if (!$userType->image || $request->input('image') !== $userType->image->file_name) {
                if ($userType->image) {
                    $userType->image->delete();
                }
                $userType->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($userType->image) {
            $userType->image->delete();
        }

        return redirect()->route('admin.user-types.index');
    }

    public function show(UserType $userType)
    {
        abort_if(Gate::denies('user_type_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.userTypes.show', compact('userType'));
    }

    public function destroy(UserType $userType)
    {
        abort_if(Gate::denies('user_type_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $userType->delete();

        return back();
    }

    public function massDestroy(MassDestroyUserTypeRequest $request)
    {
        UserType::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('user_type_create') && Gate::denies('user_type_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new UserType();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
