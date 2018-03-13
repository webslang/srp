<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RegisteredPatrons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('registered_patrons', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('date_created');
            $table->string('branch');
            $table->string('programs');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('zip_code');
            $table->string('school_attend');
            $table->string('beginning_package');
            $table->string('ending_)package');
            $table->string('')
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('videos');
    }
}
