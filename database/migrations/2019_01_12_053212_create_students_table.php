<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('barangay');
            $table->string('municipality');
            $table->string('province');
            $table->date('birth_date');
            $table->string('religion');
            $table->string('gender');
            $table->string('grade');
            $table->unsignedInteger('father_id');
            $table->unsignedInteger('mother_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
