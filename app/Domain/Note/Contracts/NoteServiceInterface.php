<?php

namespace App\Domain\Note\Contracts;

use Illuminate\Support\Collection;

use App\Domain\Note\DTO\NoteDTO;
use App\Models\Note;

interface NoteServiceInterface
{
    public function create(NoteDTO $dto): Note;
    public function getAll(int $userId): Collection;
    public function update(int $id, NoteDTO $dto): Note;
    public function delete(int $id): bool;
}
