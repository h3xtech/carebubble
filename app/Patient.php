<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends User
{
    protected $table = 'users';
    public static function boot()
    {
        parent::boot();

        static::addGlobalScope(function ($query) {
            $query->where('role', 5);
        });
    }
    public function locations()
    {
        return $this->hasMany('App\my_locations', 'user_id');
    }
}
