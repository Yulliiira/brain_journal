<?php

namespace App\Domain\Note\Contracts;

use Illuminate\Support\Collection;

use App\Domain\Note\DTO\NoteDTO;

interface NoteRepositoryInterface
{
    public function createNote(NoteDTO $noteDTO): NoteDTO;

    public function getAllByUser(int $userId): Collection;

    public function updateNote(NoteDTO $noteDTO): NoteDTO;

    public function deleteNote(int $id): bool;

}
