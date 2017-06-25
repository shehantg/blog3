<?php

use Illuminate\Database\Seeder;

use App\Homeslide;


class HomeslideTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$newSlider = new Homeslide();

    	$newSlider->title = 'this is the title okay okay ';
    	$newSlider->filename = 'public/homeslides/Vj8iWrzu57Q5Ax9yMznUSgvkUkhly4j8sBNPlDZy.jpeg';
    	$newSlider->intro =  '<p>Your contrbution used locallyhelp charitable causes and support the organization.Your contrbution used locallyhelp charitable causes and support the organization.</p>';
        $newSlider->body = '<p>Your contrbution used locallyhelp charitable causes and support the organization.Your contrbution used locallyhelp charitable causes and support the organization.Your contrbution used locallyhelp charitable causes and support the organization.Your contrbution used locallyhelp charitable causes and support the organization.Your contrbution used locallyhelp charitable causes and support the organization.Your contrbution used locallyhelp charitable causes and support the organization.Your contrbution used locallyhelp charitable causes and support the organization.Your contrbution used locallyhelp charitable causes and support the organization.Your contrbution used locallyhelp charitable causes and support the organization.Your contrbution used locallyhelp charitable causes and support the organization.Your contrbution used locallyhelp charitable causes and support the organization.Your contrbution used locallyhelp charitable causes and support the organization.Your contrbution used locallyhelp charitable causes and support the organization.Your contrbution used locallyhelp charitable causes and support the organization.Your contrbution used locallyhelp charitable causes and support the organization.</p>';
        $newSlider->tagline  = 'Our charity Hope';
        $newSlider->video = 'https://www.youtube.com/embed/jEy9ygty4JQ';
        $newSlider->program_scheme = 'child_care';
        $newSlider->homeslider_id = 1;
    	$newSlider->save();


        $newSlider = new Homeslide();

        $newSlider->title = 'this is the title okay okay ';
        $newSlider->filename = 'public/homeslides/Vj8iWrzu57Q5Ax9yMznUSgvkUkhly4j8sBNPlDZy.jpeg';
        $newSlider->intro =  '<p>Your contrbution used locallyhelp charitable causes and support the organization.Your contrbution used locallyhelp charitable causes and support the organization.</p>';
        $newSlider->body = '<p>Your contrbution used locallyhelp charitable causes and support the organization.Your contrbution used locallyhelp charitable causes and support the organization.Your contrbution used locallyhelp charitable causes and support the organization.Your contrbution used locallyhelp charitable causes and support the organization.Your contrbution used locallyhelp charitable causes and support the organization.Your contrbution used locallyhelp charitable causes and support the organization.Your contrbution used locallyhelp charitable causes and support the organization.Your contrbution used locallyhelp charitable causes and support the organization.Your contrbution used locallyhelp charitable causes and support the organization.Your contrbution used locallyhelp charitable causes and support the organization.Your contrbution used locallyhelp charitable causes and support the organization.Your contrbution used locallyhelp charitable causes and support the organization.Your contrbution used locallyhelp charitable causes and support the organization.Your contrbution used locallyhelp charitable causes and support the organization.Your contrbution used locallyhelp charitable causes and support the organization.</p>';
        $newSlider->tagline  = 'Our charity Hope';
        $newSlider->video = 'https://www.youtube.com/embed/jEy9ygty4JQ';
        $newSlider->program_scheme = 'child_care';
        $newSlider->homeslider_id = 1;
        $newSlider->save();


    }

}





