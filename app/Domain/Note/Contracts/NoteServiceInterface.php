<?php

namespace App\Domain\Note\Contracts;

use App\Domain\Note\DTO\NoteDTO;
use App\Models\Note;

interface NoteServiceInterface
{
public function createNote(NoteDTO $dto): Note;
public function getNotes(NoteDTO $dto): Note;
public function updateNote(NoteDTO $dto): Note;
public function deleteNote(NoteDTO $dto): Note;

}
