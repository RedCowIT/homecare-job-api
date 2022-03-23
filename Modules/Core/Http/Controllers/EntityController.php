<?php

namespace Modules\Core\Http\Controllers;

use Illuminate\Http\JsonResponse;
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
        $response = $this->entityService->query($request->all());

        if (!is_object($response))
        {
            return new JsonResponse(['data' => $response]);
        }

        return new JsonResource($response);
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
        $entity = $this->entityService->find($id);

        if (!$entity){
          abort(404);
        }
        return new JsonResource($entity);
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
     */
    public function destroy($id)
    {
        return new JsonResponse(['data' => ['id' => $this->entityService->delete($id)]]);
    }
}
