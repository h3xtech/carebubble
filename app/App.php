<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class App extends Model
{
  public function users()
  {
      return $this->hasMany('App\User');
  }
  protected $fillable = ['title', 'api_key', 'secret', 'status'];
}
