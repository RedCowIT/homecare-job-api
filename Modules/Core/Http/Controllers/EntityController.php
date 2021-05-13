<?php

namespace Modules\Core\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Routing\Controller;
use Modules\Core\Services\EntityService;

abstract class EntityController extends Controller
{
    protected EntityService $entityService;

    public function __construct(EntityService $entityService)
    {
        $this->entityService = $entityService;
    }

    public function index(Request $request)
    {
        return new JsonResource($this->entityService->query($request->all()));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return JsonResource
     */
    public function store(Request $request)
    {
        return new JsonResource($this->entityService->save($request->all()));
    }

    /**
     * Show the specified resource.
     * @param int|string $id
     * @return JsonResource
     */
    public function show($id)
    {
        return new JsonResource($this->entityService->find($id));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return JsonResource
     */
    public function update(Request $request, $id)
    {
        return new JsonResource($this->entityService->update($id, $request->all()));
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return JsonResource
     */
    public function destroy($id)
    {
        return new JsonResource($this->entityService->delete($id));
    }
}
