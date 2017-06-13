<?php

use Illuminate\Database\Seeder;

use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag1 = new tag();
        $tag1->name = 'HIV';
        
        $tag1->save();

        $tag2 = new tag();
        $tag2->name = 'WOMEN DEVELOPMENT';
        
        $tag2->save();

   }

}