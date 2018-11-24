<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name_location');
            $table->string('address1');
            $table->string('hours1');
            $table->string('phone1');
            $table->string('address2');
            $table->string('hours2');
            $table->string('phone2');
            $table->string('website');
            $table->string('favorite_drink');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
}
