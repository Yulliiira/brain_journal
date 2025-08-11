<?php

namespace App\Domain\Note\Contracts;

use Illuminate\Support\Collection;

use App\Domain\Note\DTO\CategoryDTO;
use App\Models\Category;


interface CategoryRepositoryInterface
{
    public function create(CategoryDto $dto): Category;
    public function update(CategoryDto $dto, int $id): Category;
    public function findAllByUserId(int $userId): Collection;
    public  function delete(int $id): bool;
}
