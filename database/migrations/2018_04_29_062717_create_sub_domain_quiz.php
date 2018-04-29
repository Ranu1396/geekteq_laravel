<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubDomainQuiz extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
    Schema::create('quiz_sub_domain', function (Blueprint $table) {
         $table->increments('id');
         $table->char('sub_domain_quizname', 100);
         $table->unsignedInteger('quiz_track_id');
         $table->unsignedInteger('max_quiz_count');
         $table->char('next_loc_link', 100);
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
        Schema::dropIfExists('quiz_sub_domain');
    }
}
