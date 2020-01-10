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

    public function test_si_addUser_relaciona_grupos_y_usuarios()
    {
        $this->group->addUser($this->user->id);
        $groupUser = $this->group->users->first();
        $this->assertEquals($this->user->id,$groupUser->id);
    }
    public function test_si_deleteUser_elimina_la_relacion()
    {
        $this->group->addUser($this->user->id);

        $this->group->deleteUser($this->user->id);
        $groupUser = $this->group->users->first();
        $this->assertNull($groupUser);
    }
    public function test_si_setAdmin_convierte_usuario_en_administrador_de_grupo()
    {
        $this->group->addUser($this->user->id);

        $this->group->setAdmin($this->user->id);
        $admin = $this->group->getAdmins->first();
        $this->assertEquals($this->user->id, $admin->id);
    }
    public function test_si_addAdmin_relaciona_grupo_y_usuario_como_administrador()
    {
        $this->group->addAdmin($this->user->id);
        $admin = $this->group->getAdmins->first();
        $this->assertEquals($this->user->id, $admin->id);
    }
    
    public function test_si_getAdmins_devuelve_administradores_del_grupo()
    {
        $this->group->addAdmin($this->user->id);
        $userTwo = factory(User::class)->create();
        $this->group->addAdmin($userTwo->id);

        $admins = $this->group->getAdmins;
        $this->assertCount(2, $admins);
    }
    public function test_si_getAdmins_NO_devuelve_usuarios_NO_administradores_del_grupo()
    {
        $this->group->addUser($this->user->id);

        $admins = $this->group->getAdmins;
        $this->assertCount(0, $admins);
    }
}