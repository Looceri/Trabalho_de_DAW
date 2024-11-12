<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';

    // The attributes that are mass assignable
    protected $fillable = [
        'title',
        'description',
        'url_image',
        'user_id',
        'status',
    ];

    // Optional: Define relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reactions()
    {
        return $this->hasMany(PostReaction::class);
    }

    // Relacionamento com o usuário (autor do post)
    
}
