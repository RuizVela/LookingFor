<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Group;
use App\User;
use App\Game;
use App\Club;

class UserTest extends TestCase
{
    use RefreshDatabase;
    
    private $user;
    private $group;
    private $club;
    
    public function setUp() :void
    {
        parent::setUp();
        $this->club=factory(Club::class)->create();
        $game=factory(Game::class)->create();
        $this->group=factory(Group::class)->create();
        $this->user=factory(User::class)->create();
    }

    public function test_si_addToGroup_relaciona_usuarios_y_grupos()
    {
        $this->user->addToGroup($this->group->id);
        $userGroup=$this->user->groups->first();
        $this->assertEquals($this->group->id, $userGroup->id);
    }

    public function test_si_deleteFromGroup_elimina_la_relacion()
    {
        $this->user->addToGroup($this->group->id);
        $this->user->deleteFromGroup($this->group->id);
        $userGroup=$this->user->groups->first();
        $this->assertNull($userGroup);
    }

    public function test_si_getAdminGroups_devuelve_administradores_de_grupo()
    {
        $this->group->addAdmin($this->user->id);
        $groupTwo = factory(Group::class)->create();
        $groupTwo->addAdmin($this->user->id);

        $admins = $this->user->getAdminGroups;
        $this->assertCount(2, $admins);
    }

    public function test_si_getAdminGroups_NO_devuelve_NO_administradores_de_grupo()
    {
        $this->user->addToGroup($this->group->id);

        $admins = $this->user->getAdminGroups;
        $this->assertCount(0, $admins);
    }
    public function test_si_addToClub_relaciona_usuarios_y_clubs()
    {
        $this->user->addToClub($this->club->id);

        $userClub = $this->user->clubs->first();
        $this->assertEquals($this->club->id, $userClub->id);
    }

    public function test_si_deleteFromClub_elimina_la_relacion()
    {
        $this->user->addToClub($this->club->id);
        $this->user->deleteFromClub($this->club->id);
        $userClub=$this->user->clubs->first();
        $this->assertNull($userClub);
    }

    //TODO: test getAdminClubs
}
