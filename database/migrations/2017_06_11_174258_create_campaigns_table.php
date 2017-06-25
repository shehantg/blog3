<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->increments('id');
             $table->string('title');
            $table->text('body');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('date')->nullable();;
            $table->string('venue')->nullable();;
            $table->string('photo');
           $table->string('type');
            $table->string('slider')->nullable();
            $table->string('video')->nullable();
            $table->boolean('status');
            $table->integer('fundraising_goal')->nullable();

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
        Schema::dropIfExists('campaigns');
    }
}
