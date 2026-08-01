<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentRegistration extends Model
{
    //

protected $fillable = [
    'enrollment_no',
    'name',
    'email',
    'password',
    'mobile_no',
    'address',
    'city',
    'dob',
    'semester',
    'branch',
    'area_of_expertise',
    'ssc_percentage',
    'hsc_percentage',
    'consent',
    'diploma_cpi',
    'backlog',
    'profile_pic',
    'linkedin_id'
];
}