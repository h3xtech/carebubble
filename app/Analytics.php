<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Analytics extends Model
{
    protected $fillable = ['ipaddress', 'patient_id', 'caregiver_id', 'user_id', 'action', 'udid'];
}
