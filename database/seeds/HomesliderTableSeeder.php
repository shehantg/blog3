<?php

use Illuminate\Database\Seeder;
use App\Homeslider;

class HomesliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newSlider = new Homeslider();

    	$newSlider->name = 'first';
    	$newSlider->status = 1;
    	$newSlider->user_id =  2;

    	$newSlider->save();

    }
}
