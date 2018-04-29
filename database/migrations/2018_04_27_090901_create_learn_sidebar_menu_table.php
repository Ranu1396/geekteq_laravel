<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLearnSidebarMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('learn_sidebar_menu', function (Blueprint $table) {
             $table->increments('id');
             $table->unsignedInteger('content_id');
             $table->string('sub_menu_name');
             $table->unsignedInteger('order');
             $table->unsignedInteger('menu_parent_id');
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
        Schema::dropIfExists('learn_sidebar_menu');
    }
}
