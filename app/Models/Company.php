<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'company_name',
        'hr_name',
        'email',
        'password',
        'location',
        'hr_contact',
        'type',
        'area',
    ];

    protected $hidden = [
        'password',
    ];
}