<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog_post extends Model
{
    /** @use HasFactory<\Database\Factories\BlogPostFactory> */
    use HasFactory;

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_id');
    }
}
