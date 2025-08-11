<?php

namespace App\Domain\Note\DTO;

use App\Enum\NoteTypeEnum;
use App\Models\Note;
use App\Models\User;

class NoteDTO
{
    /**
     * @property int|null $userId
     * @property string $title
     * @property string|null $content
     * @property NoteTypeEnum $type
     */

    public function __construct(
        public readonly ?int $user_id,
        public readonly string $title,
        public readonly ?string $content,
        public readonly NoteTypeEnum $type
    )
    {
    }
}
