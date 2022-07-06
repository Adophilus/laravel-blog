<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Post;

class PostTab extends Component
{
  /**
   * The post object
   * @var Post
   *
   */
  public $post;

  /**
   * The cover object
   * @var bool
   *
   */
  public $cover;

  /**
   * Create a new component instance.
   *
   * @param Post $post
   * @param bool $cover
   *
   * @return void
   */
  public function __construct(Post $post, bool $cover = true)
  {
    $this->post = $post;
    $this->cover = $cover;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render()
  {
    return view('components.post-tab');
  }
}
