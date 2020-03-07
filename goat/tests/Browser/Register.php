<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

use function PHPSTORM_META\type;

class Register extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     * @test
     * @return void
     */
    public function user_can_register()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')

                    ->assertSee('Register')

                    ->type('name','John Doe')

                    ->type('email','john.doe@example.com')

                    ->type('password','secretpassword')

                    ->type('password_confirmation','secretpassword')

                    ->press('REGISTER')

                    ->assertPathIs('/register');

                    
        });
    }
}
