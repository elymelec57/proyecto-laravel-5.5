<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class welcomeUsers extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function saludo_sin_apodo()
    {
        $this->get('/saludo/ely')
            ->assertStatus(200)
            ->assertSee('hola ely, pero no tienes apodo');
    }

    public function saludo_con_apodo()
    {
        $this->get('/saludo/ely/elymelec')
            ->assertStatus(200)
            ->assertSee('hola ely, tu apodo es elymelec');
    }
}
