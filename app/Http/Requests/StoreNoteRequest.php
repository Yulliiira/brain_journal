<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use App\Domain\Note\DTO\NoteDTO;
use App\Enum\NoteTypeEnum;

class StoreNoteRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title'   => ['required', 'string'],
            'content' => ['nullable', 'string'],
            'type'    => ['required', 'string', 'in:Идея,Цитата,Мысль,Вопрос'],
        ];
    }

    public function toDto(): NoteDTO
    {
        return new NoteDTO(
            auth()->id(),
            $this->input('title'),
            $this->input('content'),
            NoteTypeEnum::from($this->input('type'))
        );
    }
}
