<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileData extends Model
{
    use HasFactory;

    protected $table = 'profile_data';

    protected $fillable = [
        'customer_id',
        'title',
        'description',
        'image',
        'summary',
        'skills',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
