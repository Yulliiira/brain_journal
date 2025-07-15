<?php

namespace App\Enum;

enum NoteTypeEnum: string
{
    case IDEA = 'Идея';
    case QUOTE = 'Цитата';
    case TROUGHT = 'Мысль';
    case QUESTION = 'Вопрос';
}
