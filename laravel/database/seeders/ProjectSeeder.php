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
            'name' => 'Breaking Bad Analysis',
            'description' => "This project presents a fun and insightful data
            analysis of the iconic TV series “Breaking Bad”, using Python and the Pandas library.",
            'link' => 'https://github.com/Ferref/breaking_bad_analysis',
            'img_path' => 'breaking_bad_analysis.jpg'
        ]);
    }
}
