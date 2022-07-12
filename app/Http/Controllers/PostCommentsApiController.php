<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use App\Http\Requests\StoreCommentRequest;
use Illuminate\Support\Facades\Validator;

class PostCommentsApiController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(int $post_id)
  {
    return Post::find($post_id)->comments;
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $post_id = $request->route('post_id');
    if (!Post::find($post_id)) {
      return redirect("/posts/$post_id#commentsSection");
    }

    $validator = Validator::make($request->all(), [
      'email' => ['required', 'min:5', 'max:255'],
      'name' => ['required', 'min:5', 'max:255'],
      'message' => ['required', 'min:1', 'max:255'],
      'replyTo' => ['integer', 'nullable']
    ]);

    if ($validator->stopOnFirstFailure()->fails()) {
      return redirect("/posts/$post_id#commentsSection")->withErrors(
        $validator
      );
    }

    $validated = $validator
      ->safe()
      ->only(['name', 'email', 'message', 'replyTo']);
    $comment = new Comment([
      'poster' => $validated['name'],
      'email' => $validated['email'],
      'content' => $validated['message']
    ]);
    $comment->post()->associate($post_id);

    if (
      isset($validated['replyTo']) &&
      ($_comment = Comment::find($validated['replyTo']))
    ) {
      $comment->reply_to = $_comment->id;
    }

    $comment->save();

    return redirect("/posts/$post_id#comment" . $comment->id);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($post_id, $comment_id)
  {
    return Post::find($post_id)->comments->find($comment_id);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }
}
