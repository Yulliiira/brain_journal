<?php

namespace App\Domain\Note\Contracts;

interface NoteRepositoryInterface
{
    /**
     * @param array $note
     * @return mixed
     */
    public function createNote(array $note);

    /**
     * @param $id
     * @return mixed
     */
    public function getNote();

    /**
     * @param array $note
     * @return mixed
     */
    public function updateNote(array $note);

    /**
     * @param $id
     * @return mixed
     */
    public function deleteNote($id);

}