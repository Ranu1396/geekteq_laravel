<?php

namespace App\models\quiz_module;

use Illuminate\Database\Eloquent\Model;

class tracks extends Model
{
    protected $table = 'quiz_track';

    public function track_category()
    {
      return $this->belongsTo('App\models\quiz_module\track_category','track_id');
    }

}
