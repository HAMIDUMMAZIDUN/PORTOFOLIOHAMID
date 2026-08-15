<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['category', 'title', 'icon', 'description', 'cta_text', 'cta_link', 'order'];
}
