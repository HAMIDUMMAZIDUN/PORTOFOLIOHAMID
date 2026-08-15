<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'title',
        'category',
        'image',
        'media_type',
        'video_url',
        'video_file',
        'link',
        'description',
    ];
}
