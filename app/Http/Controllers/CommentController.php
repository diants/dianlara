<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
{
    $request->validate(['body' => 'required']);
    Comment::create([
        'user_id' => auth()->id(),
        'body' => $request->body,
    ]);
    return back();
}

public function update(Request $request, Comment $comment)
{
    $this->authorize('update', $comment);
    $request->validate(['body' => 'required']);
    $comment->update($request->only('body'));
    return back();
}

public function destroy(Comment $comment)
{
    $this->authorize('delete', $comment);
    $comment->delete();
    return back();
}

}
