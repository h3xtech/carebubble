<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chats extends Model
{
    protected $fillable = ['from', 'to', 'content', 'seen', 'convo_id'];
}
