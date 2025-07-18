<?php

namespace App\Domain\Note\Contracts;

use Illuminate\Support\Collection;

use App\Models\Note;
use App\Domain\Note\DTO\NoteDTO;

interface NoteRepositoryInterface
{
    /**
     * @param array $note
     * @return Note
     */
    public function createNote(NoteDTO $noteDTO): NoteDTO;

    /**
     * @return Collection
     */
    public function getAllByUser(int $userId): Collection;

    /**
     * @param array $note
     * @return Note
     */
    public function updateNote(NoteDTO $noteDTO): NoteDTO;

    /**
     * @param int $id
     * @return bool
     */
    public function deleteNote(int $id): bool;

}