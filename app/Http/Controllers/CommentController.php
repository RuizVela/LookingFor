<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create()
    {
        return view ('comments.create');
    }
    public function store(Request $request)
    {
        $comment = Comment::create($request->all());
        return redirect(route('profile.show',$request->profile_id));
    }
    public function edit(Comment $comment)
    {
        if ($this->authorize('edit', $comment)) {
            return view('comments.edit', ['comment'=>$comment]);
        }
    }
    public function update(Request $request, Comment $comment)
    {
        $comment->update($request->all());
        return redirect(route('profile.show',$request->profile_id));
    }
    public function destroy(Comment $comment, Request $request)
    {
        if ($this->authorize('delete', $comment)) {
            $comment->delete();
            return redirect(route('profile.show', $request->profile_id));
        }
    }
}