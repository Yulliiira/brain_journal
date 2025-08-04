<?php

namespace App\Services;

use Illuminate\Support\Collection;
use App\Domain\Note\Contracts\NoteServiceInterface;
use App\Domain\Note\Contracts\NoteRepositoryInterface;
use App\Domain\Note\DTO\NoteDTO;
use App\Models\Note;

class NoteService implements NoteServiceInterface
{
    public function __construct(
        private NoteRepositoryInterface $repository
    ) {}

    public function create(NoteDTO $dto): Note
    {
        return $this->repository->create($dto);
    }

    public function getAll(?int $userId = null): Collection
    {
        if($userId === null) {
            return Note::all();
        }
        return $this->repository->findAllByUser($userId);
    }

    public function update(int $id, NoteDTO $dto): Note
    {
        return $this->repository->update($id, $dto);
    }

    public function delete(int $id): bool
    {
        return $this->repository->delete($id);
    }
}
