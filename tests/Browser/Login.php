<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class login extends DuskTestCase
{
    /**
     * A Dusk test example.
     * 
     */
    public function testLogin(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Log in')
                    ->assertPathIs('/login')
                    ->type('email', 'gilang@gmail.com')
                    ->type('password', '12345678')
                    ->press('LOG IN')
                    ->assertPathIs('/dashboard');
        });
    }
}
