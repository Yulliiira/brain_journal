<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Services\CategoryService;
use Illuminate\Http\JsonResponse;

class CategoryController extends Controller
{
    public function __construct(
        private CategoryService $service,
    )
    {
    }

    public function index()
    {
        $categories = $this->service->getAllByUser(auth()->id());
        return CategoryResource::collection($categories);
    }

    public function store(StoreCategoryRequest $request)
    {
        $category = $this->service->create($request->toDto());
        return new CategoryResource($category);
    }

    public function show(): JsonResponse
    {
        return response()->json(CategoryResource::collection($this
            ->service->getAllByUser(auth()->id())));
    }

    public function update(int $id, UpdateCategoryRequest $request)
    {
        $category = $this->service->update($id, $request->toDto());
        return new CategoryResource($category);
    }

    public function destroy(int $id)
    {
        return  $this->service->delete($id);
    }
}
