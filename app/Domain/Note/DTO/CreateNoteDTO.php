<?php

namespace App\Domain\Note\DTO;

class CreateNoteDTO
{
    public function __construct(
        public string $title,
        public ?string $content,
        public array $tags = []
    ) {}
}