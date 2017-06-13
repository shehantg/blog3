<?php

use Illuminate\Database\Seeder;

use App\Photo;

class PhotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    $new_photo1 = new Photo();
    $new_photo1->blog_id = 1;
    $new_photo1->filename = 'public/photos/0RL0vxgwjEpfkfImiTPh1lCBL7ZeeoS2DvTZplix.jpeg';
    $new_photo1->save();


        $new_photo2 = new Photo();
        $new_photo2->blog_id = 2;
        $new_photo2->filename = 'public/photos/0RL0vxgwjEpfkfImiTPh1lCBL7ZeeoS2DvTZplix.jpeg';
        $new_photo2->save();


        $new_photo3 = new Photo();
        $new_photo3->blog_id = 3;
        $new_photo3->filename = 'public/photos/0RL0vxgwjEpfkfImiTPh1lCBL7ZeeoS2DvTZplix.jpeg';
        $new_photo3->save();


        $new_photo4 = new Photo();
        $new_photo4->blog_id = 4;
        $new_photo4->filename = 'public/photos/0RL0vxgwjEpfkfImiTPh1lCBL7ZeeoS2DvTZplix.jpeg';
        $new_photo4->save();


        $new_photo5 = new Photo();
        $new_photo5->blog_id = 5;
        $new_photo5->filename = 'public/photos/0RL0vxgwjEpfkfImiTPh1lCBL7ZeeoS2DvTZplix.jpeg';
        $new_photo5->save();




         $new_photo6 = new Photo();
        $new_photo6->blog_id = 6;
        $new_photo6->filename = 'public/photos/y1IR9QZHJ7BnG6FuPyjIyckHCPWUTivXABbSreDm.png';
        $new_photo6->save();


         $new_photo7 = new Photo();
        $new_photo7->blog_id = 7;
        $new_photo7->filename = 'public/photos/y1IR9QZHJ7BnG6FuPyjIyckHCPWUTivXABbSreDm.pn6';
        $new_photo7->save();


                 $new_photo8 = new Photo();
        $new_photo8->blog_id = 8;
        $new_photo8->filename = 'public/photos/y1IR9QZHJ7BnG6FuPyjIyckHCPWUTivXABbSreDm.png';
        $new_photo8->save();



                 $new_photo9 = new Photo();
        $new_photo9->blog_id = 9;
        $new_photo9->filename = 'public/photos/y1IR9QZHJ7BnG6FuPyjIyckHCPWUTivXABbSreDm.png';
        $new_photo9->save();




        $new_photo10 = new Photo();
        $new_photo10->blog_id = 10;
        $new_photo10->filename = 'public/photos/y1IR9QZHJ7BnG6FuPyjIyckHCPWUTivXABbSreDm.png';
        $new_photo10->save();



}
}