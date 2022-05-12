<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        "registration_date",
        "first_name",
        "last_name",
        "dob",
        "gender"
    ];
}
