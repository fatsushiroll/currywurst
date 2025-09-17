<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    /** @use HasFactory<\Database\Factories\ReviewsFactory> */
    use HasFactory;

    public function author()
    {
        return $this->belongsTo(User::class, foreignKey:'author_id');
    }
}