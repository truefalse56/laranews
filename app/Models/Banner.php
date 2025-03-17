<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'description',
        'image_url',
        'link',
        'is_active',
        'position'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
