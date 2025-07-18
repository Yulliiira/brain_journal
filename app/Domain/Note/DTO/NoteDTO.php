<?php

namespace App\Domain\Note\DTO;

use App\Enum\NoteTypeEnum;
use App\Models\Note;
use App\Models\User;

class NoteDTO
{
    /**
     * @param User $id
     * @param Note $user_id
     * @param Note $title
     * @param Note $content
     */
    public function __construct(
        public readonly int          $userId,
        public readonly string       $title,
        public readonly string       $content,
        public readonly NoteTypeEnum $type
    )
    {
    }
}
