<?php

namespace App\Repositories;

use Illuminate\Support\Collection;
use App\Domain\Note\Contracts\NoteRepositoryInterface;
use App\Domain\Note\DTO\NoteDTO;
use App\Models\Note;

class NoteRepository implements NoteRepositoryInterface
{
    public function create(NoteDTO $dto): Note
    {
        return Note::create([
            'user_id' => $dto->user_id,
            'title'   => $dto->title,
            'content' => $dto->content,
            'type'    => $dto->type->value,
        ]);
    }

    public function findAllByUser(int $userId): Collection
    {
        return Note::where('user_id', $userId)->get();
    }

    public function update(int $id, NoteDTO $dto): Note
    {
        $note = Note::findOrFail($id);
        $note->update([
            'title'   => $dto->title,
            'content' => $dto->content,
            'type'    => $dto->type->value,
        ]);
        return $note;
    }

    public function delete(int $id): bool
    {
        return Note::findOrFail($id)->delete();
    }
}

