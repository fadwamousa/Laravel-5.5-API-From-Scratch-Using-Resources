<?php

use Illuminate\Database\Seeder;
use App\Article;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Article::truncate();
        factory(App\Article::class,30)->create();
    }
}
