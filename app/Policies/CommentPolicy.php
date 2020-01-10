<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Comment;

class CommentPolicy
{
    use HandlesAuthorization;

    public function __construct()
    {
        //
    }
    public function edit(User $user, Comment $comment)
    {
        return $user->id==$comment->user_id or $user->is_admin==TRUE;
    }
    public function delete(User $user, Comment $comment)
    {
        return $user->id==$comment->user_id or $user->is_admin==TRUE;
    }
}