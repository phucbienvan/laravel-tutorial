<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'title 1',
                'description' => 'description 1'
            ],
            [
                'title' => 'title 2',
                'description' => 'description 2'
            ],

        ];
        DB::table('posts')->insert($data);
    }
}
