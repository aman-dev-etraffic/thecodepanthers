<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saveddetail extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customer_id',
        'country_id',
        'state_id',
        'city',
        'postal_code',
        'dob',
        'phone',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
