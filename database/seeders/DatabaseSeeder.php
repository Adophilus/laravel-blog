<?php

namespace Database\Seeders;

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
    $this->call([
      CategoriesSeeder::class,
      TagsSeeder::class,
      UsersSeeder::class,
      PostsSeeder::class,
      CommentsSeeder::class
    ]);
  }
}
