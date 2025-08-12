<?php

namespace App\Services;

use Illuminate\Support\Collection;

use App\Domain\Note\Contracts\CategoryRepositoryInterface;
use App\Domain\Note\Contracts\CategoryServiceInterface;
use App\Domain\Note\DTO\CategoryDTO;
use App\Models\Category;

class CategoryService implements CategoryServiceInterface
{
    public function __construct(
        private  CategoryRepositoryInterface $repository)
    {
    }

    public function create(CategoryDTO $dto): Category
    {
        return $this->repository->create($dto);
    }

    public function update(int $id, CategoryDTO $dto): Category
    {
        return $this->repository->update($dto, $id);
    }

    public function delete(int $id): bool
    {
        return $this->repository->delete($id);
    }

    public function getAllByUser(int $userId): Collection
    {
        return $this->repository->findAllByUserId($userId);
    }

    public function findByIdForUser(int $id, int $userId): Category
    {
        return  $this->repository->findByIdForUser($id, $userId);
    }
}
