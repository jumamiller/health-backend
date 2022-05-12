<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vital extends Model
{
    use HasFactory;
    protected $fillable=[
        'patient_id',
        "visit_date",
        "height",
        "weight",
        "bmi"
    ];
    public function patient() {
        return $this->belongsTo(Patient::class);
    }
}
