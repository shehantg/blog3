<?php

use Illuminate\Database\Seeder;

use App\Slide;

class SlideTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newslide1 = new Slide();
        $newslide1->slider_id = 1;
        $newslide1->filename = 'public/slides/HPgddedgeGJCSTCa1ccIxmRQjhjvdUVzDxfGsSWr.jpeg';
       
        $newslide1->imglink  ='https://www.freelancer.com/dashboard/';
        $newslide1->body     ='jasakfghsg dshgdkj kjdhbgjud dkghdk.';
        $newslide1->save();





        $newslide2 = new Slide();
        $newslide2->slider_id = 1;
        $newslide2->filename = 'public/slides/HPgddedgeGJCSTCa1ccIxmRQjhjvdUVzDxfGsSWr.jpeg';
        
        $newslide2->imglink  ='https://www.freelancer.com/dashboard/';
        $newslide2->body     ='jasakfghsg dshgdkj kjdhbgjud dkghdk.';
        $newslide2->save();

   }

}