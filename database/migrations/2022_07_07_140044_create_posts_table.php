<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('posts', function (Blueprint $table) {
      $table->id();
      $table->string('cover');
      $table->string('title');
      $table->string('author_username');
      $table->string('category_name');
      $table->string('desc');
      $table->text('content');
      $table->timestamps();

      // $table
      //   ->foreign('author_username')
      //   ->references('username')
      //   ->on('users');

      // $table
      //   ->foreign('category_name')
      //   ->references('name')
      //   ->on('categories');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('posts');
  }
}
