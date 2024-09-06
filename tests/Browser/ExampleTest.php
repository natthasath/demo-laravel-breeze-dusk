<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     */
    public function testBasicExample(): void
    {
        $this->browse(function (Browser $browser) {
            /* $browser->visit('/')
                    ->pause(5000)
                    ->assertSee('Laravel'); */

            $browser->visit('/register')
                    ->type('name', 'admin')
                    ->type('email', 'admin@example.com')
                    ->type('password', 'password')
                    ->type('password_confirmation', 'password')
                    ->pause(5000)
                    ->press('REGISTER');

            $browser->visit('/login')
                    ->type('email', 'admin@example.com')
                    ->type('password', 'password')
                    ->pause(5000)
                    ->press('LOG IN')
                    ->pause(36000);
        });
    }
}
