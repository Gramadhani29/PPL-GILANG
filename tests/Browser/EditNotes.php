<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNotes extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->clickLink('Log in')
                ->assertPathIs('/login')
                ->type('email', 'gilang@gmail.com')
                ->type('password', '12345678')
                ->press('LOG IN')
                ->assertPathIs('/dashboard')
                ->clickLink('Notes')
                ->assertPathIs('/notes')
                ->click('@edit-1')
                ->assertPathIs('/edit-note-page/1')
                ->type('title', 'ini gimana')
                ->type('description', 'aduhhh')
                ->press('UPDATE')
                ->assertPathIs('/notes');

        });
    }
}
