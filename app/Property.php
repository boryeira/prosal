<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
  public function comuna()
  {
      return $this->belongsTo('App\Comuna');
  }
  public function images()
  {
      return $this->hasMany('App\PropertyImage');
  }
  public function docs()
  {
      return $this->hasMany('App\PropertyDoc');
  }
}
