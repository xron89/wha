<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Patients extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'address', 'dob', 'weight', 'height', 'gender', 'marital_status', 'family_history', 'doctor_name',
        'doctor_address', 'doctor_number', 'medication', 'smoker', 'drinker', 'medical_history'
    ];

}
