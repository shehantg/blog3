<?php

use Illuminate\Database\Seeder;
use App\Testimonial;

class TestimonialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newslide1 = new Testimonial();
        $newslide1->name = 'Shehan Gomes';
        $newslide1->photo = 'public/testimonials/BofJ4nPpfm4Qmap0b7ZwW9PI06a9euVMPA5GZPVT.jpeg';
		$newslide1->body     ='<p>wdgdfgdgdgdgdgdgrdferyteryteryryrytefwef</p>';
        $newslide1->save();

        $newslide1 = new Testimonial();
        $newslide1->name = 'Shehan Gomes';
        $newslide1->photo = 'public/testimonials/BofJ4nPpfm4Qmap0b7ZwW9PI06a9euVMPA5GZPVT.jpeg';
        $newslide1->body     ='<p>wdgdfgdgdgdgdgdgrdferyteryteryryrytefwef</p>';
        $newslide1->save();

        $newslide1 = new Testimonial();
        $newslide1->name = 'Shehan Gomes';
        $newslide1->photo = 'public/testimonials/BofJ4nPpfm4Qmap0b7ZwW9PI06a9euVMPA5GZPVT.jpeg';
        $newslide1->body     ='<p>wdgdfgdgdgdgdgdgrdferyteryteryryrytefwef</p>';
        $newslide1->save();


        $newslide1 = new Testimonial();
        $newslide1->name = 'Shehan Gomes';
        $newslide1->photo = 'public/testimonials/BofJ4nPpfm4Qmap0b7ZwW9PI06a9euVMPA5GZPVT.jpeg';
        $newslide1->body     ='<p>wdgdfgdgdgdgdgdgrdferyteryteryryrytefwef</p>';
        $newslide1->save();


        $newslide1 = new Testimonial();
        $newslide1->name = 'Shehan Gomes';
        $newslide1->photo = 'public/testimonials/BofJ4nPpfm4Qmap0b7ZwW9PI06a9euVMPA5GZPVT.jpeg';
        $newslide1->body     ='<p>wdgdfgdgdgdgdgdgrdferyteryteryryrytefwef</p>';
        $newslide1->save();
    }
}
