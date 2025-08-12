<?php

namespace App\Domain\Note\Contracts;

use Illuminate\Support\Collection;

use App\Domain\Note\DTO\CategoryDTO;
use App\Models\Category;


interface CategoryRepositoryInterface
{
    public function create(CategoryDTO $dto): Category;
    public function update(CategoryDTO $dto, int $id): Category;
    public function findAllByUserId(int $userId): Collection;
    public  function findByIdForUser(int $id, int $userId): Category;
    public  function delete(int $id): bool;
}
