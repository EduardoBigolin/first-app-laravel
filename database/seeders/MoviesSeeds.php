<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            'title' => 'The little prince',
            'description' => 'Based on the book by Antoine Saint-Exupéry. The story has already become a classic: when his plane crashes in the middle of the desert, the pilot meets a boy from a distant planet. Together, the two exchange experiences and move audiences of all ages.',
            'trailerLink' => 'https://www.youtube.com/watch?v=7WoO-luLshk',
            'movieCover' => 'https://i.pinimg.com/originals/35/20/40/352040e724e0d498b23086bab27d501f.jpg',
        ]);
    }
}
