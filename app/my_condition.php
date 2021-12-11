<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class my_condition extends Model
{
  public function user()
  {
      return $this->belongsTo('App\User', 'user_id');
  }
  protected $fillable = ['title', 'description', 'effects', 'restrictions', 'suggestions', 'user_id'];
}
