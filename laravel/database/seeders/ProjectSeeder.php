<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            [
                'name' => 'Breaking Bad Analysis',
                'description' => "This project presents a fun and insightful data
                analysis of the iconic TV series “Breaking Bad”, using Python and the Pandas library.",
                'link' => 'https://github.com/Ferref/breaking_bad_analysis',
                'img_path' => 'breaking_bad_analysis.jpg'
            ],
            [
                'name' => 'DungeonNiJs',
                'description' => "A 2D platformer game developed using Laravel and JavaScript.",
                'link' => 'https://github.com/Ferref/DungeonNiJs',
                'img_path' => 'loading.jpg'
            ],
                        [
                'name' => 'Flatwhite',
                'description' => "A self-made Python module designed to simplify everyday tasks.",
                'link' => 'https://github.com/Ferref/flatwhite',
                'img_path' => 'flatwhite.jpg'
            ],

    ]);
    }
}
