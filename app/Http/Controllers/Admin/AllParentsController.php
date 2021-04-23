<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyAllParentRequest;
use App\Http\Requests\StoreAllParentRequest;
use App\Http\Requests\UpdateAllParentRequest;
use App\Models\AllParent;
use App\Models\AllStudent;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AllParentsController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('all_parent_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $allParents = AllParent::with(['student', 'created_by'])->get();

        $all_students = AllStudent::get();

        $users = User::get();

        return view('admin.allParents.index', compact('allParents', 'all_students', 'users'));
    }

    public function create()
    {
        abort_if(Gate::denies('all_parent_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $students = AllStudent::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.allParents.create', compact('students'));
    }

    public function store(StoreAllParentRequest $request)
    {
        $allParent = AllParent::create($request->all());

        return redirect()->route('admin.all-parents.index');
    }

    public function edit(AllParent $allParent)
    {
        abort_if(Gate::denies('all_parent_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $students = AllStudent::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $allParent->load('student', 'created_by');

        return view('admin.allParents.edit', compact('students', 'allParent'));
    }

    public function update(UpdateAllParentRequest $request, AllParent $allParent)
    {
        $allParent->update($request->all());

        return redirect()->route('admin.all-parents.index');
    }

    public function show(AllParent $allParent)
    {
        abort_if(Gate::denies('all_parent_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $allParent->load('student', 'created_by');

        return view('admin.allParents.show', compact('allParent'));
    }

    public function destroy(AllParent $allParent)
    {
        abort_if(Gate::denies('all_parent_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $allParent->delete();

        return back();
    }

    public function massDestroy(MassDestroyAllParentRequest $request)
    {
        AllParent::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
