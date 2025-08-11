<?php

namespace App\Repositories;

use Illuminate\Support\Collection;

use App\Domain\Note\Contracts\CategoryRepositoryInterface;
use App\Domain\Note\DTO\CategoryDTO;
use App\Models\Category;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function create(CategoryDTO $dto): Category
    {
        return Category::create([
            'user_id' => $dto->user_id,
            'name' => $dto->name,
            'slug' => $dto->slug,
        ]);
    }

    public function update(CategoryDto $dto, int $id): Category
    {
        $category = Category::findOrFail($id);
        $category->update([
            'name' => $dto->name,
            'slug' => $dto->slug,
        ]);
        return $category;
    }

    public function findAllByUserId(int $userId): Collection
    {
        return Category::where('user_id', $userId)->get();
    }

    public function delete(int $id): bool
    {
        return Category::findOrFail($id)->delete();
    }
}
