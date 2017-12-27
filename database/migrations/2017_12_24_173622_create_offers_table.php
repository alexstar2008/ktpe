<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('offers')){
            Schema::create('offers', function (Blueprint $table) {
                $table->increments('id');
                $table->string('CompanyName')->nullable();
                $table->string('job');
                $table->string('ContactName');
                $table->string('Position')->nullable();
                $table->string('Phone')->nullable();
                $table->string('Email')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
}
