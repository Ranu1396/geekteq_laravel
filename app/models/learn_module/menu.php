<?php

namespace App\models\learn_module;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    protected $table = 'learn_sidebar_menu';

//return parent of menu
    public function menuParent()
{
    return $this->belongsTo('App\models\learn_module\menuParent', 'menu_parent_id');
}


}
