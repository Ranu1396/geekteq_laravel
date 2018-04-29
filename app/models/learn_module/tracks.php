<?php

namespace App\models\learn_module;

use Illuminate\Database\Eloquent\Model;

class tracks extends Model
{
  protected $table = 'learn_tracks';

//return parent of menu
  public function track_category()
  {
    return $this->belongsTo('App\models\learn_module\track_category', 'track_id');
  }

  public static function getTrackIdFromTrackName($trackName)
  {
    return self::where('track_name', '=', $trackName)->pluck('id');
  }



// public function menuParent()
//   {
//       return $this->hasMany('App\models\learn_module\menuParent');
//   }



}
