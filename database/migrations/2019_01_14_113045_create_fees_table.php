<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fees', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('grade_id');
            $table->unsignedInteger('mode_id');
            $table->unsignedInteger('registration');
            $table->unsignedInteger('tuition');
            $table->unsignedInteger('misc');
            $table->unsignedInteger('computer');

            $table->foreign('grade_id')->references('id')->on('grades');
            $table->foreign('mode_id')->references('id')->on('modes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fees');
    }
}
