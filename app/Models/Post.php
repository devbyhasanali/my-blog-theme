<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

 protected $fillable = [
        'title',
        'slug',
        'img',
        'description',
        'category_id',
        'meta_title',
        'meta_desc',
        'meta_keywords',
        'status',
    ];

    // Relationship: Post belongs to Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
