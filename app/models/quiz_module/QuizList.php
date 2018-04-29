<?php

namespace App\models\quiz_module;

use Illuminate\Database\Eloquent\Model;

class QuizList extends Model
{
  protected $table = 'quiz_list';

//return parent of menu
  public function quizParent()
    {
      return $this->belongsTo('App\models\quiz_module\QuizParent');
    }

}
