<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitForm extends Model
{
    use HasFactory;
    protected $fillable=[
        'patient_id',
        'drugs_visit_date',
        'diet_visit_date',
        "diet_general_health",
        "drugs_general_health",
        "is_on_diet_to_lose_weight",
        "is_on_drugs",
        "drugs_comments",
        "diet_comments"
    ];
    public function patient() {
        return $this->belongsTo(Patient::class);
    }
}
