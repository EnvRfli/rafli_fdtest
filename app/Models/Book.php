<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'description',
        'cover_image',
        'rating',
        'user_id', 
    ];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}