<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Comment extends Model
{
   protected $fillable = [
    'description','rating','user_id','email','name',
  ];

   public function user()
    {
        return $this->belongsTo('App\User');
    }
}
