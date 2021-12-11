<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
  public function user()
  {
      return $this->belongsTo('App\User');
  }
  protected $fillable = ['type', 'value', 'unit', 'amount_changed', 'previous_value', 'time_taken', 'user_id'];
}
