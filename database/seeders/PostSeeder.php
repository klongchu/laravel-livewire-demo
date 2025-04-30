<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder {
    public function run(): void {
        DB::table('posts')->insert([
            [
                'title' => 'Welcome to Laravel',
                'content' => 'This is your first post.',
                'author' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Second Post',
                'content' => 'Laravel makes development easy and enjoyable!',
                'author' => 'John Doe',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Second Post',
                'content' => 'Laravel makes development easy and enjoyable!',
                'author' => 'John Doe',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Second Post',
                'content' => 'Laravel makes development easy and enjoyable!',
                'author' => 'John Doe',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Second Post',
                'content' => 'Laravel makes development easy and enjoyable!',
                'author' => 'John Doe',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Second Post',
                'content' => 'Laravel makes development easy and enjoyable!',
                'author' => 'John Doe',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Second Post',
                'content' => 'Laravel makes development easy and enjoyable!',
                'author' => 'John Doe',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Second Post',
                'content' => 'Laravel makes development easy and enjoyable!',
                'author' => 'John Doe',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Second Post',
                'content' => 'Laravel makes development easy and enjoyable!',
                'author' => 'John Doe',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

