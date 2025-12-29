<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CompanyMenu extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image_path',
        'url',
        'sort_order',
        'is_active'
    ];
}
