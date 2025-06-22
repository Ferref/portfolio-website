<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('abouts')->insert([
            [
                'title' => 'Learning journey',
                'description' => 'I studied Software Development at the University of Szeged,
                    Juhász Gyula Faculty of Education (SZTE JGYPK).
                    I am open to learning new technologies and methodologies.
                    I enjoy working in a team but can also perform tasks efficiently on my own.
                    I am passionate about building clean, functional applications and continuously
                    improving my coding skills. My goal is to contribute to innovative projects while
                    growing as a developer in a dynamic work environment.',
                'img_path' => 'coding.jpg'
            ],
            [
                'title' => 'Real life experience',
                'description' => 'As an intern, I contributed to the development of a large-scale data warehouse for a well-known organization.
                I enjoy exploring different methods for storing, structuring, and managing data efficiently.',
                'img_path' => 'database.jpg'
            ],
            
        ]);
    }
}
