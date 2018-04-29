<?php

namespace App\models\learn_module;

use Illuminate\Database\Eloquent\Model;

class track_category extends Model
{
  protected $table = 'learn_track_categories';

  public function tracks()
  {
      return $this->hasMany('App\models\learn_module\tracks');
  }
}
