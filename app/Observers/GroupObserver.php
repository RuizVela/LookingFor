<?php

namespace App\Observers;

use App\Group;
use App\User;

class GroupObserver
{
    public function created(Group $group)
    {
        if(auth()->user())
        {
            $userId = auth()->user()->id;
            $group->addAdmin($userId);
        }
    }
    public function updated(Group $group)
    {
        //
    }
    public function deleted(Group $group)
    {
        //
    }
    public function restored(Group $group)
    {
        //
    }
    public function forceDeleted(Group $group)
    {
        //
    }
}
