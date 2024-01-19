<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['image', 'title', 'content', 'category_id', 'published_at'];

    // Definisi relasi dengan model Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
