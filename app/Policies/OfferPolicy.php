<?php

namespace App\Policies;

use App\User;
use App\Offer;
use Illuminate\Auth\Access\HandlesAuthorization;

class OfferPolicy
{
    use HandlesAuthorization;

    public function __construct()
    {
        //
    }
    public function edit (User $user, Offer $offer)
    {
        return $user->id == $offer->user_id or $user->is_admin==TRUE;
    }
    public function delete (User $user, Offer $offer)
    {
        return $user->id == $offer->user_id or $user->is_admin==TRUE;
    }
}
