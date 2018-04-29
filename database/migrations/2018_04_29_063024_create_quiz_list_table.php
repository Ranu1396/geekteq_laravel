<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up() {
     Schema::create('quiz_list', function (Blueprint $table) {
         $table->increments('id');
         $table->char('name', 100);
         $table->unsignedInteger('sub_domain_id');
         $table->unsignedInteger('max_scores');
         $table->char('next_loc_link', 100);
         $table->enum('difficulty', ['Easy', 'Medium','Hard']);
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
        Schema::dropIfExists('quiz_list');
    }
}
