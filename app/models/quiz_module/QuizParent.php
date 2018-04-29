<?php

namespace App\models\quiz_module;

use Illuminate\Database\Eloquent\Model;

class QuizParent extends Model
{
    protected $table = 'quiz_sub_domain';

    public function quizList()
    {
        return $this->hasMany('App\models\quiz_module\QuizList');
    }
}
