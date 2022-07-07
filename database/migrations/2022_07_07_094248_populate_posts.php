<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Post;

class PopulatePosts extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    $post = new Post()
    $post->cover = "/uploads/productivity-banner.jpg";
    $post->title = "How To Boost Productivity As A Developer";
    $post->author = "adophilus";
    $post->desc = "";
    $post->content = "";
    $post->save();
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    //
  }
}
