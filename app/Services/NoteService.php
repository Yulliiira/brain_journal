<?php

namespace App\Services;

use App\Domain\Note\Contracts\NoteServiceInterface;
use App\Domain\Note\Contracts\NoteRepositoryInterface;
use App\Domain\Note\DTO\NoteDTO;
use App\Models\Note;

class NoteService implements NoteServiceInterface
{
    public function __construct(
        private NoteRepositoryInterface $repository
    )
    {
    }

    public function createNote(NoteDTO $dto): Note
    {
        return $this->repository->createNote($dto);
    }

    public function getNotes(NoteDTO $dto): Note
    {
        // пока можно не трогать, сделаем позже
    }

    public function updateNote(NoteDTO $dto): Note
    {
        // потом добавим
    }

    public function deleteNote(NoteDTO $dto): Note
    {
        // потом добавим
    }
}
