<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('play_date');
            $table->string('half');
            $table->integer('course_id');
            $table->string('1');
            $table->string('2');
            $table->string('3');
            $table->string('4');
            $table->string('5');
            $table->string('6');
            $table->string('7');
            $table->string('8');
            $table->string('9');
            $table->string('putt1');
            $table->string('putt2');
            $table->string('putt3');
            $table->string('putt4');
            $table->string('putt5');
            $table->string('putt6');
            $table->string('putt7');
            $table->string('putt8');
            $table->string('putt9');
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
        Schema::dropIfExists('scores');
    }
}
