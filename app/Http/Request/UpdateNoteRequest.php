<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

use App\Domain\Note\DTO\NoteDTO;
use App\Enum\NoteTypeEnum;

class UpdateNoteRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title'   => ['string'],
            'content' => ['nullable', 'string'],
            'type' => ['sometimes', 'string', 'in:Идея,Цитата,Мысль,Вопрос'],
        ];
    }

    public function toDto(): NoteDTO
    {
        return new NoteDTO(
            auth()->id(),
            $this->input('title'),
            $this->input('content'),
            NoteTypeEnum::tryFrom($this->input('type')) ?? NoteTypeEnum::IDEA,
        );
    }
}
