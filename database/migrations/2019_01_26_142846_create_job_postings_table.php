<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobPostingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobPosting', function (Blueprint $table) {
            $table->increments('idjob_posting');
            $table->string('title');
            $table->string('company_name');
            $table->string('location');
            $table->date('deadline');
            $table->text('description');
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
        Schema::dropIfExists('jobPosting');
    }
}
