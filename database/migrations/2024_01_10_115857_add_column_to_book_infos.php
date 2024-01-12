<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToBookInfos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('book_infos', function (Blueprint $table) {
            //
            $table->string('bedpay');
            $table->string('bathpay');
            $table->string('kitpay')->nullable();
            $table->string('fridgepay')->nullable();
            $table->string('gardenpay')->nullable();
            $table->string('total');
            $table->string('subtotal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('book_infos', function (Blueprint $table) {
            //
        });
    }
}
