<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class AutenticacionUsuarioTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInicioSesionTest()
    {
    	$user = factory(User::class)->create();

        $response = $this->actingAs($user)
        ->withSession(['foo'=>'bar'])
        ->get('/usuario')
        ->assertSee('USUARIOS')
        ->assertStatus(200);
    }
}
