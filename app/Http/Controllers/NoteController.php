<?php

namespace App\Http\Controllers;

use App\Http\Request\StoreNoteRequest;
use App\Http\Resources\NoteResource;
use App\Services\NoteService;

class NoteController extends  Controller
{
    public function store(StoreNoteRequest $request, NoteService $service)
    {
        $note = $service->createNote($request->toDto());
        return new NoteResource($note);
    }
}
