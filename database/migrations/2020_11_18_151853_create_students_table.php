<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('index')->unique();
            $table->string('full_name');
            $table->longText('address')->nullable();
            $table->string('town')->nullable();
            $table->date('dob');
            $table->string('bc_num');
            $table->date('admission_date');
            $table->unsignedBigInteger('grade_id');

            $table->string('parent_name');
            $table->string('parent_nic')->nullable();
            $table->string('parent_contact')->nullable();

            $table->string('status')->nullable();

            $table->timestamps();
        });

        Schema::table('students', function($table){
            $table->foreign('grade_id')->references('id')->on('grades');
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
