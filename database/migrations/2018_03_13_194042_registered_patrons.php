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
            $table->date('date_created');
            $table->year('year_created');
            $table->string('branch');
            $table->string('programs');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->char('zip_code', 5);
            $table->string('school_attend');
            $table->string('beginning_package');
            $table->string('ending_package');
            $table->string('your_age');
            $table->string('book_reading_promise');
            $table->string('how_did_you_hear');
            $table->string('shirt_sizes');
            $table->string('books_read');
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
