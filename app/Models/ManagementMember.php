<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManagementMember extends Model
{
    use HasFactory;

    protected $table = 'management_members';

    protected $fillable = [
        'name',
        'position',
        'description',
        'image_path',
        'role',
        'is_active',
        'sort_order',
    ];
}
