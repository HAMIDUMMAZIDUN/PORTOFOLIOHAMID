<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingPackage extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'price',
        'renewal_price',
        'features',
        'wa_text',
        'is_popular',
    ];

    protected $casts = [
        'is_popular' => 'boolean',
    ];
}
