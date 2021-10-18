<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate(); //truncate first the table before run the code
        Post::truncate();
        Category::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
             'name'=>'Personal',
             'slug'=>'personal'
         ]);
        $family = Category::create([
            'name'=>'Family',
            'slug'=>'family'
        ]);
        $work = Category::create([
            'name'=>'Work',
            'slug'=>'work'
        ]);

        Post::create([
            'user_id'=>$user->id,
            'category_id'=>$family->id,
            'title'=>'p1',
            'slug'=>'p11',
            'excerpt'=>'asdjwljaldkaw',
            'body'=>'askjdhwkajdwhkjawhkdjawhkdjawdka'
        ]);
        Post::create([
            'user_id'=>$user->id,
            'category_id'=>$family->id,
            'title'=>'p2',
            'slug'=>'p22',
            'excerpt'=>'asdjwljaldkaw',
            'body'=>'askjdhwkajdwhkjawhkdjawhkdjawdka'
        ]);
    }
}
