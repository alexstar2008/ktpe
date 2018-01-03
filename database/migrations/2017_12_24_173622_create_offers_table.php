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
                $table->string('company_name')->nullable();
                $table->string('company_name_en')->nullable();

                $table->string('job');
                $table->string('job_en')->nullable();

                $table->string('contact_name');
                $table->string('contact_name_en')->nullable();

                $table->string('position')->nullable();
                $table->string('position_en')->nullable();

                $table->string('phone')->nullable();
                $table->string('email')->nullable();
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
