<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Books extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title');
            $table->text('excerpt');
            $table->char('isbn');
            $table->integer('pages');
            $table->double('cost');
            $table->double('value');
            $table->dateTime('released');
            $table->integer('status');
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
        //
        Schema::dropIfExists('books');
    }
}
