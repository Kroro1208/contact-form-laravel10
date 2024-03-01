<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tests')->insert([ // "tests"はマイグレーションファイルにあるテーブル名
            ['text' => 'testUser', 'created_at' => Now()], // "text"はカラム名
            ['text' => 'testUser2', 'created_at' => Now()],
        ]);
    }
}
