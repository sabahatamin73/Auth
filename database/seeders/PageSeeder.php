<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            [
                'title' => 'page',
                'content' => 'page-content',
            ],
            [
                'title' => 'page1',
                'content' => 'page1-content',
            ],
            [
                'title' => 'page2',
                'content' => 'page2-content',
            ],
            [
                'title' => 'page3',
                'content' => 'page3-content',
            ],
            [
                'title' => 'page4',
                'content' => 'page4-content',
            ],
        ]);
    }
}
