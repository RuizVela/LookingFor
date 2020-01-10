<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Game;

class GamePolicy
{
    use HandlesAuthorization;

    public function __construct()
    {
        //
    }

    public function edit(User $user, Game $game)
    {
        return $user->is_admin == true;
    }
    
    public function delete(User $user, Game $game)
    {
        return $user->is_admin == true;
    }
}
