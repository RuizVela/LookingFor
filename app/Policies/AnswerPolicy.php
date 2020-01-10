<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Answer;

class AnswerPolicy
{
    use HandlesAuthorization;
    public function __construct()
    {
        //
    }
    public function edit(User $user,Answer $answer)
    {   
        return $user->id==$answer->user_id or $user->is_admin==TRUE;
    }
    public function delete(User $user, Answer $answer)
    {
        return $user->id==$answer->user_id or $user->is_admin==TRUE;
    }
}
