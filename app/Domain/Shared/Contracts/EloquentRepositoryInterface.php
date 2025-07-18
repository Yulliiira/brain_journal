<?php

namespace App\Domain\Shared\Contracts;

use App\Domain\Note\DTO\NoteDTO;
use Illuminate\Database\Eloquent\Collection;

interface EloquentRepositoryInterface
{
    public function all(): Collection;
    public function create(array|NoteDTO $data);
    public function update(int $id, array|NoteDTO $data);
    public function delete(int $id): bool;
}