<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Log extends Model
{

  // public static $monday = Carbon::createFromFormat('Y-m-d', Carbon::parse('first Monday of December 2018'))->toDateTimeString();
  // public static $monday = Carbon::parse('first Monday of December 2018');
  // public $monday;
  // //
  // public function __construct() {
  //
  //   $this->monday = \Carbon\Carbon::parse($moment->'first Monday of December 2018')->format('m/d/Y h:m');
  //   // $this->monday = Carbon::createFromFormat('Y-m-d', Carbon::parse('first Monday of December 2018'))->toDateTimeString();
  // }
  // public $monday = Carbon::parse('first Monday of December 2018');
  // public $monday = Carbon::createFromFormat('Y-m-d', '$monday')->toDateTimeString();

  // public $tuesday = $monday->add(1, 'day');
  // public $wednesday = $tuesday->add(1, 'day');
  // public $thursday = $wednesday->add(1, 'day');
  // public $friday = $thursday->add(1, 'day');


  public function client() {
        return $this->belongsTo('App\Client', 'client_id', 'id');
    }

  public function user() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
  
    //
}
