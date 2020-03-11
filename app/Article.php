<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'full_text',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class, 'article_id');
    }
}