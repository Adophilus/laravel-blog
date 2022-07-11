<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

use App\Models\Comment;
use App\Models\Post;

class StoreCommentRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return !!Post::find($this->route('post_id'));
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
    return [
      'email' => ['required', 'min:5', 'max:255'],
      'name' => ['required', 'min:5', 'max:255'],
      'message' => ['required', 'min:1', 'max:255'],
      'replyTo' => ['integer']
    ];
  }

  /**
   * Get the error messages for the defined validation rules.
   *
   * @return array
   */
  public function messages()
  {
    return [
      'email.required' => 'A valid email is required',
      'name.required' => 'A valid name required',
      'message.required' => 'Comment cannot be blank'
    ];
  }

  // protected function failedValidation(Validator $validator)
  // {
  //   if ($this->expectsJson()) {
  //     $errors = (new ValidationException($validator))->errors();
  //     throw new HttpResponseException(
  //       response()->json(['data' => $errors], 422)
  //     );
  //   }

  //   parent::failedValidation($validator);
  // }
}
