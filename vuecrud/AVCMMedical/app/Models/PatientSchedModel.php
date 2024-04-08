<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientSchedModel extends Model
{
    use HasFactory;
    protected $table = "patientsched";
    protected $fillable = [
        'name',
        'email',
        'purpose',
        'date',

    ];
}
