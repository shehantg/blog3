<?php

use Illuminate\Database\Seeder;

use App\Slider;


class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$newSlider = new Slider();

    	$newSlider->body = 'first';
    	$newSlider->status = 1;
    	$newSlider->user_id =  2;

    	$newSlider->save();


    }

}





