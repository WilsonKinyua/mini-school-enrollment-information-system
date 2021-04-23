<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAllParentRequest;
use App\Http\Requests\UpdateAllParentRequest;
use App\Http\Resources\Admin\AllParentResource;
use App\Models\AllParent;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AllParentsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('all_parent_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AllParentResource(AllParent::with(['student', 'created_by'])->get());
    }

    public function store(StoreAllParentRequest $request)
    {
        $allParent = AllParent::create($request->all());

        return (new AllParentResource($allParent))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(AllParent $allParent)
    {
        abort_if(Gate::denies('all_parent_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AllParentResource($allParent->load(['student', 'created_by']));
    }

    public function update(UpdateAllParentRequest $request, AllParent $allParent)
    {
        $allParent->update($request->all());

        return (new AllParentResource($allParent))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(AllParent $allParent)
    {
        abort_if(Gate::denies('all_parent_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $allParent->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
