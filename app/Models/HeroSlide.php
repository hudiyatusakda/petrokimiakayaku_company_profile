<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroSlide extends Model
{
    use HasFactory;

    protected $table = 'hero_slides';

    protected $fillable = [
        'type',
        'title',
        'description',
        'image_path',
        'is_active',
    ];
}
