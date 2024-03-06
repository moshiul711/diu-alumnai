<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_event', function (Blueprint $table) {
            $table->increments('idprogram_events');
            $table->string('title');
            $table->longText('description');
            $table->string('image');
            $table->string('address');
            $table->date('date');
            $table->integer('vacciences');
            $table->integer('user_iduser');
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
        Schema::dropIfExists('program_event');
    }
}
