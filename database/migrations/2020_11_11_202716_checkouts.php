<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Checkouts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('checkouts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('ref_user_id')->unsigned();
            $table->foreign('ref_user_id')->references('id')->on('users');
            $table->unsignedBigInteger('ref_book_id')->unsigned();
            $table->foreign('ref_book_id')->references('id')->on('books');
            $table->dateTime('checkout_date');
            $table->dateTime('due_date');
            $table->dateTime('return_date');
            $table->integer('condition_checkout');
            $table->integer('condition_checkin');
            $table->integer('status');
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
    }
}