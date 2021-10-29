<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfirmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confirms', function (Blueprint $table) {
            $table->id();
            $table->string('place')->nullable();
            $table->string('placeCity')->nullable();
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('city')->nullable();
            $table->string('area')->nullable();
            $table->string('postcode');
            $table->string('bed')->nullable();
            $table->string('bath')->nullable();
            $table->string('kitchen')->nullable();
            $table->string('fridge')->nullable();
            $table->string('garden')->nullable();
            $table->string('bedpay')->nullable();
            $table->string('bathpay')->nullable();
            $table->string('kitpay')->nullable();
            $table->string('fridgepay')->nullable();
            $table->string('gardenpay')->nullable();
            $table->string('subtotal');
            $table->string('total');
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
        Schema::dropIfExists('confirms');
    }
}
