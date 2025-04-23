<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class Registrasi extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     */
    public function testRegistrasi(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Modul 3')
                    ->Clicklink('Register')
                    ->assertPathIs('/register')
                    ->type('name', 'Gilang')
                    ->type('email', 'gilang@gmail.com')
                    ->type('password', '12345678')
                    ->type('password_confirmation', '12345678')
                    ->press('REGISTER')
                    ->assertPathIs('/dashboard');


        });
    }
}
