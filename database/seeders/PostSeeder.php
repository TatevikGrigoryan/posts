<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 3; $i++) {
            $title = Str::random(10);

            DB::table('posts')->insert([
                'title' => Str::random(10),
                'description' => 'Paragraph for '.$title,
                'user_id' => 1,
            ]);
        }
    }
}
