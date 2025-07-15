<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NoteRelation extends Model
{
    use HasFactory;

    protected $fillable = ['note_id_from', 'note_id_to', 'relation_type'];

    public function from(): BelongsTo
    {
        return $this->belongsTo(Note::class, 'note_id_from');
    }

    public function to(): BelongsTo
    {
        return $this->belongsTo(Note::class, 'note_id_to');
    }
}
