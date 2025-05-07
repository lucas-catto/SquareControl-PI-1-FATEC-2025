<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Room extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'teacher_id'
    ];

    // Relationships

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }
}
