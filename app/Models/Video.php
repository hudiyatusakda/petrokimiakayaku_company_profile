<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'slug',
        'youtube_id',
        'description',
        'upload_date',
        'duration',
        'is_active',
        'views'
    ];
}
