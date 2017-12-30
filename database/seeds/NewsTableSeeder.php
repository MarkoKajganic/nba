<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            'title' => str_random(10),
            'content' => str_random(50),
            'user_id' => rand(1,3)
        ]);
    }
}
