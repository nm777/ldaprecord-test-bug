<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use LdapRecord\Laravel\Testing\DirectoryEmulator;
use LdapRecord\Models\ActiveDirectory\User;
use Tests\TestCase;

class LdapAuthenticationTest extends TestCase
{
    use DatabaseMigrations, WithFaker;

    public function test_auth_works()
    {
        $fake = DirectoryEmulator::setup('default');

        $ldapUser = User::create([
            'cn' => $this->faker->name,
            'mail' => $this->faker->email,
            'objectguid' => $this->faker->uuid,
        ]);

        $fake->actingAs($ldapUser);

        $this->post('/login', [
            'email' => $ldapUser->mail[0],
            'password' => 'secret',
        ])->assertRedirect('/home');
    }
}
