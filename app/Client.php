<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

  public function logs() {
        return $this->hasMany('App\Log');
    }

  public function contacts() {
        return $this->hasMany('App\Contact');
    }

  public function average() {
    $this->logs;
    $this->contacts;
    return (($this->logs->count())/($this->contacts->count()+$this->logs->count()));
  }

  public function cancellation_frequency(){
    if ($this->average() >= .6){
      return "cancel-low";
    }
    else if ($this->average() >= .5){
      return "cancel-medium";
    }
    else{
      return "cancel-high";
    }
  }
    //
}
