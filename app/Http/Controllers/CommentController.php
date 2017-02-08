<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function add(Request $request){
      $comment = new Comment;
      $comment->author = $request->author;
      $comment->content = $request->content;
      $comment->product_id = $request->product_id;
      $comment->save();
      return back();
    }
}
