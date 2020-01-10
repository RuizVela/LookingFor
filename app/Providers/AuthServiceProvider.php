<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
         'App\Offer' => 'App\Policies\OfferPolicy', 
         'App\User' => 'App\Policies\UserPolicy',
         'App\Answer'=>'App\Policies\AnswerPolicy',
         'App\Group'=>'App\Policies\GroupPolicy',
         'App\Comment'=>'App\Policies\CommentPolicy',
         'App\Game'=>'App\Policies\GamePolicy'    
    ];
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
