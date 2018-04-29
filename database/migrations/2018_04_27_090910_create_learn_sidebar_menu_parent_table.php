<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLearnSidebarMenuParentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('learn_sidebar_menu_parent', function (Blueprint $table) {
             $table->increments('id');
             $table->string('parent_name');
             $table->unsignedInteger('track_id');
             $table->unsignedInteger('order');
             $table->timestamps();
         });
     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('learn_sidebar_menu_parent');
    }
}
