<?php

namespace App\Repositories;

//use Illuminate\Database\QueryException;
use Illuminate\Support\Collection;

use App\Domain\Note\Contracts\NoteRepositoryInterface;
use App\Models\Note;
use App\Domain\Note\DTO\NoteDTO;

class NoteRepository implements NoteRepositoryInterface
{
    public function createNote(NoteDTO $dto): Note
    {
        return Note::create([
            'user_id' => $dto->userId,
            'title'   => $dto->title,
            'content' => $dto->content,
            'type'    => $dto->type->value,
        ]);
    }

    public function getAllByUser(int $userId): Collection
    {
        return Note::all()->where('user_id', $userId);
    }

    public function updateNote(NoteDTO $noteDTO): NoteDTO
    {
        $note = Note::findOrFail($noteDTO);
        return $note->update($noteDTO);
    }

    public function deleteNote(int $id): bool
    {
        return Note::findOrFail($id)->delete();
    }

//    private function validateNoteData(array $data): void
//    {
//        $required = ['user_id', 'title', 'content', 'type'];
//
//        foreach ($required as $field) {
//            if (!isset($data[$field])) {
//                throw new \InvalidArgumentException("$field is required");
//            }
//        }
//    }
}
