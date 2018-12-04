<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

  public function client() {
        return $this->belongsTo('App\Client', 'client_id', 'id');
    }

    public function user() {
          return $this->belongsTo('App\User', 'user_id', 'id');
      }
    //
}
