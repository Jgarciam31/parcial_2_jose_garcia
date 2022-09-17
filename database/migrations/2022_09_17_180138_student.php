<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Student extends Migration
{

    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->string('lastName', 100);
            $table->string('age', 100);
            $table->string('term', 100);
            $table->string('sex', 100);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::drop('Student');
    }
}
