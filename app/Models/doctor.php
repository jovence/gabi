<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    protected $fillable = [
        'name',
        'specialization',
        'bio',
        'phone',
        'email',
        'address',
        'profile_picture',
    ];
}
