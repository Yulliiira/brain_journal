<?php

namespace App\Repositories;

use App\Domain\Note\Contracts\NoteRepositoryInterface;
use App\Models\Note;
use Illuminate\Database\QueryException;

class NoteRepository implements NoteRepositoryInterface
{
    public function getNote()
    {
        return Note::all();
    }

    public function createNote(array $data)
    {
        try {
            $this->validateNoteData($note);

            return Note::create($note);
        } catch (\InvalidArgumentException $e) {
//            throw new

        } catch (QueryException $e) {
            logger()->error('Error creating note: ', [
                    'data' => $data,
                    $e->getMessage()]
            );
        }
    }

    public function updateNote(array $note)
    {

    }

    public function deleteNote($id)
    {
    }

    private function validateNoteData(array $data): void
    {
        $required = ['user_id', 'title', 'content', 'type'];

        foreach ($required as $field) {
            if (!isset($data[$field])) {
                throw new \InvalidArgumentException("$field is required");
            }
        }
    }
}
