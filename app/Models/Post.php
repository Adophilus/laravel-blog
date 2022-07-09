<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Tag;
use App\Models\User;

class Post extends Model
{
  use HasFactory;

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array<int, string>
   */
  protected $hidden = ['content'];

  public function author()
  {
    return $this->belongsTo(User::class, 'author_username');
  }

  public function category()
  {
    return $this->belongsTo(Category::class);
  }

  public function comments()
  {
    return $this->hasMany(Comment::class);
  }

  public function tags()
  {
    return $this->belongsToMany(Tag::class, 'post_tag', 'post_id');
  }
}
