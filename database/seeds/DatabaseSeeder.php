<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(RoleTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(BlogsTableSeeder::class);
        $this->call(PhotoTableSeeder::class);
        $this->call(SliderTableSeeder::class);
        $this->call(SlideTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(HomesliderTableSeeder::class);
        $this->call(HomeslideTableSeeder::class);
           $this->call(CampaignTableSeeder::class);
           $this->call(EventTableSeeder::class);
            $this->call(TestimonialTableSeeder::class);
            $this->call(SponsorTableSeeder::class);
    }
}
