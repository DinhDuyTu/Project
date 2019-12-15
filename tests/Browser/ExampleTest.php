<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
    // use DatabaseMigrations;

    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function test_login_fail()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                ->type('email', 'adminn@mail.com')
                ->type('password', '12345678')
                ->press('Login')
                ->assertPathIs('/login');
        });
    }

    public function test_login_success()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                ->type('email', 'admin@mail.com')
                ->type('password', '12345678')
                ->press('Login')
                ->assertPathIs('/admin');
        });
    }
}
