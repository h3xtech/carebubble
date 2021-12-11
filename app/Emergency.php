<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emergency extends Model
{
    protected $fillable = ['type', 'threat_level', 'message', 'action', 'user_id'];
}
