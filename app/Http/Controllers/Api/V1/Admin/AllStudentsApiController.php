<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreAllStudentRequest;
use App\Http\Requests\UpdateAllStudentRequest;
use App\Http\Resources\Admin\AllStudentResource;
use App\Models\AllStudent;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AllStudentsApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('all_student_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AllStudentResource(AllStudent::with(['created_by'])->get());
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

        if ($request->input('any_other_documents', false)) {
            $allStudent->addMedia(storage_path('tmp/uploads/' . basename($request->input('any_other_documents'))))->toMediaCollection('any_other_documents');
        }

        return (new AllStudentResource($allStudent))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(AllStudent $allStudent)
    {
        abort_if(Gate::denies('all_student_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AllStudentResource($allStudent->load(['created_by']));
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

        if ($request->input('any_other_documents', false)) {
            if (!$allStudent->any_other_documents || $request->input('any_other_documents') !== $allStudent->any_other_documents->file_name) {
                if ($allStudent->any_other_documents) {
                    $allStudent->any_other_documents->delete();
                }
                $allStudent->addMedia(storage_path('tmp/uploads/' . basename($request->input('any_other_documents'))))->toMediaCollection('any_other_documents');
            }
        } elseif ($allStudent->any_other_documents) {
            $allStudent->any_other_documents->delete();
        }

        return (new AllStudentResource($allStudent))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(AllStudent $allStudent)
    {
        abort_if(Gate::denies('all_student_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $allStudent->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
