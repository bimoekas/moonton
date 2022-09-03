<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            [
                'name' => 'Avengers Endgame',
                'slug' => 'avengers-endgame',
                'category' => 'Action',
                'video_url' => 'https://www.youtube.com/watch?v=TcMBFSGVi1c',
                'thumbnail' => 'https://images8.alphacoders.com/100/1003220.png',
                'rating' => 9.4,
                'is_featured' => 1,
            ],
            [
                'name' => 'Spiderman: No Way Home',
                'slug' => 'spiderman-no-way-home',
                'category' => 'Action',
                'video_url' => 'https://www.youtube.com/watch?v=JfVOs4VSpmA',
                'thumbnail' => 'https://wallpaperaccess.com/full/6790561.jpg',
                'rating' => 9.2,
                'is_featured' => 0,
            ],
            [
                'name' => 'Aquaman',
                'slug' => 'aquaman',
                'category' => 'Action',
                'video_url' => 'https://www.youtube.com/watch?v=WDkg3h8PCVU',
                'thumbnail' => 'https://i.pinimg.com/564x/c9/87/34/c987340629a9b5a12db26ad92c3b2692.jpg',
                'rating' => 8.5,
                'is_featured' => 1,
            ]
        ];
        Movie::insert($movies);
    }
}
