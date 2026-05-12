<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    protected $table = 'posts';
    protected $fillable = ['name'];

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }

    public function blog_posts()
    {
        return $this->belongsToMany(Blog_post::class, 'post_id');
    }
}
