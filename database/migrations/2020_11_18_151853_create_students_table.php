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
            $table->unsignedBigInteger('grade');
            $table->date('dob');
            $table->string('address_line_1')->nullable();
            $table->string('address_line_2')->nullable();
            $table->string('address_line_3')->nullable();
            $table->string('address_line_4')->nullable();
            $table->string('address_line_5')->nullable();
            $table->string('BC');
            $table->date('admission_date');
            $table->string('parent_name');
            $table->string('parent_nic')->nullable();
            $table->string('parent_contact')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });

        Schema::table('students', function($table){
            $table->foreign('grade')->references('id')->on('grades');
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
