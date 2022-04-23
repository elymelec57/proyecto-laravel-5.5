<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UsersModelTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {

        factory(User::class)->create([
            'name' => 'ely',
        ]);

        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('usuarios')
            ->assertSee('ely');
    }

    public function UsuariosNull()
    {
        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('no hay usuarios registrados');
    }

    public function detallesUser(){

        $user = factory(User::class)->create([
            'name' => 'daniel'
        ]);

        $this->get('/usuarios'.$user->id)
            ->assertStatus(200)
            ->assertSee("daniel");
    }

    public function error404(){
        $this->get('/usuarios/999')
        ->assertStatus(404)
        ->assertSee('Pagina no encontrada');
    }

    function cargar_nuevo(){
        $this->get('/usuarios/nuevo')
            ->assertState(200)
            ->assertSee('nuevo usuario');
    }

    function it_new_users(){
        $this->post('/usuarios',[
            'name' => 'elymelec',
            'email' => 'elymelec@gmail.com',
            'password' => '123456',
        ]);

        $this->assertDatabaseHas('users',[
            'name' => 'elymelec',
            'email' => 'elymelec@gmail.com',
            //'password' => '123456',
        ]);
    }

    
}


