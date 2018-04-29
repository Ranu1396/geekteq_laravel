<?php

namespace App\models\learn_module;

use Illuminate\Database\Eloquent\Model;

class menuParent extends Model
{

  protected $table = 'learn_sidebar_menu_parent';

  public function childMenu()
  {
      return $this->hasMany('App\models\learn_module\menu');
  }

  // public function tracks()
  // {
  //   return $this->belongsTo('App\models\learn_module\tracks','track_id');
  // }

}
