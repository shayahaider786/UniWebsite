<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class MatricStudent extends Model
{ 
    use HasFactory;

    protected $fillable = [
        'name',
        'father_name',
        'mother_name',
        'dob',
        'address',
        'class',
        'bform',
        'gender',
        'religion',
        'city',
        'province',
        'contact',
        'guardian_contact',
    ];
}
