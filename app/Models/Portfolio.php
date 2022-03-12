<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable =[
        'customer_id',
        'title',
        'description',
        'image',
        'summary',
        'client_name',
        'client_review',
        'approved',
        'status',
    ];
    protected $hidden =[
      'created_at' , 'updated_at',
    ];
}
