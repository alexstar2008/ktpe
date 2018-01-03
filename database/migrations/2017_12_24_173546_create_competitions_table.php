<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void!
     */
    public function up()
    {
        if(!Schema::hasTable('competitions')){
            Schema::create('competitions', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title');
                $table->string('text');
                $table->string('title_en')->nullable();
                $table->string('text_en')->nullable();
                $table->string('img')->nullable();
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
        Schema::dropIfExists('competitions');
    }
}
