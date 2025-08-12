<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\NoteRelation;

class Note extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','title','content','type'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function outgoingRelations(): HasMany
    {
        return $this->hasMany(NoteRelation::class, 'note_id_from');
    }

    public function incomingRelations(): HasMany
    {
        return $this->hasMany(NoteRelation::class, 'note_id_to');
    }
}
