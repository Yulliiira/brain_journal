<?php

namespace App\Domain\Note\Contracts;

use Illuminate\Support\Collection;

use App\Domain\Note\DTO\CategoryDTO;
use App\Models\Category;


interface CategoryServiceInterface
{
    public function create(CategoryDTO $dto): Category;
    public function update(int $id, CategoryDTO $dto): Category;
    public function delete(int $id): bool;
    public function getAllByUser(int $userId, int $id): Collection;
    public function findByIdForUser(int $id, int $userId): Category;
}
