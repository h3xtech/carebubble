<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargiver extends User
{
  protected $table = 'Users';
  public static function boot()
  {
      parent::boot();

      static::addGlobalScope(function ($query) {
          $query->where('role', 6);
      });
  }
}
