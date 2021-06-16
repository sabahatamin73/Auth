<?php

namespace Database\Seeders;

use App\Models\Categories;
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
        $category_one = Categories::create(
                            [
                                'category_name' => 'WORDPRESS',
                            ]
                        );
        $category_two = Categories::create(
                            [
                                'category_name' => 'PHP',
                            ]
                        );
        $category_three = Categories::create(
                            [
                                'category_name' => 'PYTHON',
                            ]
                        );
        $category_four = Categories::create(
                            [
                                'category_name' => 'JAVASCRIPT',
                            ]
                        );
        $category_five = Categories::create(
                            [
                                'category_name' => 'JAVA',
                            ]
                        );


        DB::table('posts')->insert([
            [
                'title' => 'post',
                'content' => 'post-content',
                'category_id' => $category_one->id,
            ],
            [
                'title' => 'post1',
                'content' => 'post1-content',
                'category_id' =>  $category_two->id,
            ],
            [
                'title' => 'post2',
                'content' => 'post2-content',
                'category_id' =>  $category_three->id,
            ],
            [
                'title' => 'post3',
                'content' => 'post3-content',
                'category_id' =>  $category_four->id,
            ],
            [
                'title' => 'post4',
                'content' => 'post4-content',
                'category_id' =>  $category_five->id,
            ],
        ]);
    }
}
