<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

class PostsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    for ($i = 0; $i < 10; $i++) {
      $post = new Post([
        'cover' => '/uploads/productivity-banner.jpg',
        'title' => 'How To Boost Productivity As A Developer',
        'desc' =>
          'Being a developer involves harmoniously combining various factors and technologies on a day-to-day basis in order to get work done. In this article I share 5 tips on how you can boost your workflow productivity.',
        'content' => file_get_contents(__DIR__ . '/../../public/dev/post.html')
      ]);

      $author = User::inRandomOrder()->first();
      $category = Category::find('lifestyle');
      $tag = Tag::find('tech');

      $post->author()->associate($author);
      $post->category()->associate($category);

      $post->save();
      $post->tags()->attach($tag);
    }
  }
}
