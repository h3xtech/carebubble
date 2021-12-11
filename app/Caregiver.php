<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caregiver extends User
{
  protected $table = 'users';
  public static function boot()
  {
      parent::boot();

      static::addGlobalScope(function ($query) {
          $query->where('role', 6);
      });
  }
}
