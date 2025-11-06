<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PricingPlan extends Model
{
    protected $fillable = [
        'name',
        'price_monthly',
        'price_yearly',
        'description',
        'features',
        'is_popular',
        'status',
    ];

    protected $casts = [
        'features' => 'array',
        'is_popular' => 'boolean',
        'status' => 'boolean',
    ];
}
