<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Club;

class ClubPolicy
{
    use HandlesAuthorization;


    public function __construct()
    {
        //
    }
    public function edit(User $user, Club $club)
    {
        $adminsId = $club->getAdmins()->pluck('id')->toArray();
        return  in_array($user->id, $adminsId) or $user->is_admin==TRUE;
    }
    public function delete(User $user, Club $club)
    {
        $adminsId = $club->getAdmins()->pluck('id')->toArray();
        return  in_array($user->id, $adminsId) or $user->is_admin==TRUE;
    }
}
