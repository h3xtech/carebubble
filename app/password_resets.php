<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class password_resets extends Model
{
    protected $guarded = ['id'];
    protected $table = 'password_resets';
}
