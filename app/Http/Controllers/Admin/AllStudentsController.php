<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyAllStudentRequest;
use App\Http\Requests\StoreAllStudentRequest;
use App\Http\Requests\UpdateAllStudentRequest;
use App\Models\AllStudent;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class AllStudentsController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('all_student_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $allStudents = AllStudent::with(['created_by', 'media'])->get();

        $users = User::get();

        return view('admin.allStudents.index', compact('allStudents', 'users'));
    }

    public function create()
    {
        abort_if(Gate::denies('all_student_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.allStudents.create');
    }

    public function store(StoreAllStudentRequest $request)
    {
        $allStudent = AllStudent::create($request->all());

        if ($request->input('result_slip', false)) {
            $allStudent->addMedia(storage_path('tmp/uploads/' . basename($request->input('result_slip'))))->toMediaCollection('result_slip');
        }

        if ($request->input('birth_certificate', false)) {
            $allStudent->addMedia(storage_path('tmp/uploads/' . basename($request->input('birth_certificate'))))->toMediaCollection('birth_certificate');
        }

        if ($request->input('passport_photo', false)) {
            $allStudent->addMedia(storage_path('tmp/uploads/' . basename($request->input('passport_photo'))))->toMediaCollection('passport_photo');
        }

        foreach ($request->input('any_other_documents', []) as $file) {
            $allStudent->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('any_other_documents');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $allStudent->id]);
        }

        return redirect()->route('admin.all-students.index')->with('success','Student created successfully');
    }

    public function edit(AllStudent $allStudent)
    {
        abort_if(Gate::denies('all_student_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $allStudent->load('created_by');

        return view('admin.allStudents.edit', compact('allStudent'));
    }

    public function update(UpdateAllStudentRequest $request, AllStudent $allStudent)
    {
        $allStudent->update($request->all());

        if ($request->input('result_slip', false)) {
            if (!$allStudent->result_slip || $request->input('result_slip') !== $allStudent->result_slip->file_name) {
                if ($allStudent->result_slip) {
                    $allStudent->result_slip->delete();
                }
                $allStudent->addMedia(storage_path('tmp/uploads/' . basename($request->input('result_slip'))))->toMediaCollection('result_slip');
            }
        } elseif ($allStudent->result_slip) {
            $allStudent->result_slip->delete();
        }

        if ($request->input('birth_certificate', false)) {
            if (!$allStudent->birth_certificate || $request->input('birth_certificate') !== $allStudent->birth_certificate->file_name) {
                if ($allStudent->birth_certificate) {
                    $allStudent->birth_certificate->delete();
                }
                $allStudent->addMedia(storage_path('tmp/uploads/' . basename($request->input('birth_certificate'))))->toMediaCollection('birth_certificate');
            }
        } elseif ($allStudent->birth_certificate) {
            $allStudent->birth_certificate->delete();
        }

        if ($request->input('passport_photo', false)) {
            if (!$allStudent->passport_photo || $request->input('passport_photo') !== $allStudent->passport_photo->file_name) {
                if ($allStudent->passport_photo) {
                    $allStudent->passport_photo->delete();
                }
                $allStudent->addMedia(storage_path('tmp/uploads/' . basename($request->input('passport_photo'))))->toMediaCollection('passport_photo');
            }
        } elseif ($allStudent->passport_photo) {
            $allStudent->passport_photo->delete();
        }

        if (count($allStudent->any_other_documents) > 0) {
            foreach ($allStudent->any_other_documents as $media) {
                if (!in_array($media->file_name, $request->input('any_other_documents', []))) {
                    $media->delete();
                }
            }
        }
        $media = $allStudent->any_other_documents->pluck('file_name')->toArray();
        foreach ($request->input('any_other_documents', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $allStudent->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('any_other_documents');
            }
        }

        return redirect()->route('admin.all-students.index');
    }

    public function show(AllStudent $allStudent)
    {
        abort_if(Gate::denies('all_student_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $allStudent->load('created_by', 'studentAllParents');

        return view('admin.allStudents.show', compact('allStudent'));
    }

    public function destroy(AllStudent $allStudent)
    {
        abort_if(Gate::denies('all_student_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $allStudent->delete();

        return back();
    }

    public function massDestroy(MassDestroyAllStudentRequest $request)
    {
        AllStudent::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('all_student_create') && Gate::denies('all_student_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new AllStudent();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }

    public function approve($id) {
        DB::table('all_students')
                ->where('id', $id)
                ->update(['status' => true]);
        return redirect()->back()->with('success','Student updated successfully');
    }
}
