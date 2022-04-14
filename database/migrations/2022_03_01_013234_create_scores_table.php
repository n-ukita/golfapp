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
            $table->integer('link_id');
            $table->integer('course_id');
            $table->integer('c1');
            $table->integer('c2');
            $table->integer('c3');
            $table->integer('c4');
            $table->integer('c5');
            $table->integer('c6');
            $table->integer('c7');
            $table->integer('c8');
            $table->integer('c9');
            $table->integer('putt1');
            $table->integer('putt2');
            $table->integer('putt3');
            $table->integer('putt4');
            $table->integer('putt5');
            $table->integer('putt6');
            $table->integer('putt7');
            $table->integer('putt8');
            $table->integer('putt9');
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
