<?php

namespace App\Domain\Shared\Contracts;

interface EloquentRepositoryInterface
{
    public function getAllNote(array $data);

    public function create(array $note);

    public function update(array $note);

    public function addNote(array $note);

    public function deleteNote($id);
}