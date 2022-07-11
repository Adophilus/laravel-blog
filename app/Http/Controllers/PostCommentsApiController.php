<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use App\Http\Requests\StoreCommentRequest;

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
   * @param  \Illuminate\Http\StoreCommentRequest  $request
   * @return \Illuminate\Http\Response
   */
  public function store(StoreCommentRequest $request)
  {
    $validated = $request
      ->safe()
      ->only(['name', 'email', 'message', 'replyTo']);
    $comment = new Comment([
      'poster' => $validated['name'],
      'email' => $validated['email'],
      'content' => $validated['message']
    ]);
    $comment->post()->associate(Post::find($request->route('post_id'))->id);

    if (
      isset($validated['replyTo']) &&
      ($_comment = Comment::find($validated['replyTo']))
    ) {
      $comment->reply_to = $_comment->id;
    }

    $comment->save();

    return response()->json(['message' => 'posted!'], 201);
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
