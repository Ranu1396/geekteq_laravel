<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('quiz_content', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('order')->unsigned();
          $table->integer('quiz_list_id')->unsigned();
          $table->text('question');
          $table->text('A');
          $table->text('B');
          $table->text('C');
          $table->text('D');
          $table->string('correct_answer');
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
        Schema::dropIfExists('quiz_content');
    }
}
