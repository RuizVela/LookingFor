<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Group;
use App\User;
use App\Game;
use App\Club;

class GroupTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_Agrega_Usuarios_La_Funcion_De_AddUser()
    {
        $this->assertCount(0, User::all());
        $this->assertCount(0, Group::all());
        $club=factory(Club::class)->create();
        $game=factory(Game::class)->create();
        $group=factory(Group::class)->create();
        $user=factory(User::class)->create();
        $this->assertCount(1, Group::all());

        $response = $this->PATCH('/group'. $group->id . '/addUser'. $user->id);
        $response->assertStatus(200);
        $relation = $group->users()->where('user_id',$user->id)->first()->pivot;

       $this->assertEquals($user->id, $relation->user_id);
    }
}
