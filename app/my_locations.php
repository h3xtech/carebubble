<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class my_locations extends Model
{
  public function user()
  {
      return $this->belongsTo('App\User', 'user_id');
  }
  protected $fillable = ['title', 'gps', 'limitations', 'frequency', 'status', 'user_id', 'image'];
}
