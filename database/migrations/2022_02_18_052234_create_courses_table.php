<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('link_id'); // ゴルフ場名を保存するカラム
            $table->string('hole'); // ホール名を保存するカラム
            $table->string('HP1'); // 1番ホールの規定打数を保存するカラム
            $table->string('HP2'); // 2番ホールの規定打数を保存するカラム
            $table->string('HP3'); // 3番ホールの規定打数を保存するカラム
            $table->string('HP4'); // 4番ホールの規定打数を保存するカラム
            $table->string('HP5'); // 5番ホールの規定打数を保存するカラム
            $table->string('HP6'); // 6番ホールの規定打数を保存するカラム
            $table->string('HP7'); // 7番ホールの規定打数を保存するカラム
            $table->string('HP8'); // 8番ホールの規定打数を保存するカラム
            $table->string('HP9'); // 9番ホールの規定打数を保存するカラム
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
        Schema::dropIfExists('courses');
    }
}
