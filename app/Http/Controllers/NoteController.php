<?php

namespace App\Http\Controllers;

use App\Http\Request\StoreNoteRequest;
use App\Http\Request\UpdateNoteRequest;
use App\Http\Resources\NoteResource;
use App\Services\NoteService;

class NoteController extends Controller
{
    public function __construct(
        private NoteService $service
    ) {}

    public function index()
    {
        $notes = $this->service->getAll(auth()->id());
        return NoteResource::collection($notes);
    }

    public function store(StoreNoteRequest $request)
    {
        $note = $this->service->create($request->toDto());
        return new NoteResource($note);
    }

    public function update(UpdateNoteRequest $request, int $id)
    {
        $note = $this->service->update($id, $request->toDto());
        return new NoteResource($note);
    }

    public function destroy(int $id)
    {
        $this->service->delete($id);
        return response()->json(['message' => 'Deleted']);
    }
}

