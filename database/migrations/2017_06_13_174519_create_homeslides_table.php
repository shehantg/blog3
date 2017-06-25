<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeslidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homeslides', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('homeslider_id')->unsigned();
            $table->foreign('homeslider_id')->references('id')->on('homesliders')->onDelete('cascade');
            $table->string('title');
            $table->string('filename');
            $table->string('intro');
            $table->string('tagline');
            $table->string('video');
            $table->string('program_scheme');
            $table->text('body');
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
        Schema::dropIfExists('homeslides');
    }
}
