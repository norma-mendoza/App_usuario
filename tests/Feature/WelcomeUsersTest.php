<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /** @test  void */
   function bienvenido_users_nickname(){
        $this->get('/saludo/norma/mendoza')
        ->assertStatus(200)
        ->assertSee('Bienvenido norma, tu apodo es mendoza');
    }

     /** @test  void */
   function bienvenido_users_no_nickname(){
    $this->get('/saludo/norma/')
    ->assertStatus(200)
    ->assertSee('Bienvenido norma, no tienes apodo');
    }
 }
