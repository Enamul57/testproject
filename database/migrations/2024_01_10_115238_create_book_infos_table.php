<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_infos', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->string('bedroom');
            $table->string('bathroom');
            $table->string('kitchen')->nullable();
            $table->string('fridge')->nullable();
            $table->string('garden')->nullable();
            $table->string('date');
            $table->string('time');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('city');
            $table->string('area');
            $table->string('postcode')->nullable();
            $table->string('address');
            $table->string('note')->nullable();
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
        Schema::dropIfExists('book_infos');
    }
}
