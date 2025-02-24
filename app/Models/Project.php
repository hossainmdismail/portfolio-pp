<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = [
        'title',
        'thumbnail',
        'services',
        'content',
        'link',
        'client',
        'status',
        'category_status',
        'seo_title',
        'seo_description',
        'seo_tags',
    ];

    protected $casts = [
        'services' => 'array',
        'seo_tags' => 'array',
    ];
}
