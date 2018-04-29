<?php

namespace App\models\quiz_module;

use Illuminate\Database\Eloquent\Model;

class track_category extends Model
{
    protected $table = 'quiz_categories';

    public function tracks()
    {
      return $this->hasMany('App\models\quiz_module\tracks');
    }
}
