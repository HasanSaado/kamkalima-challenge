<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\User;

use function PHPSTORM_META\type;

class Register extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     * @test
     * 
     */
    public function testUserCanRegister()
    {

        $this->browse(function (Browser $browser) {
            $browser->visit('/register')

                ->assertSee('Register')

                ->type('name', 'John Doe')

                ->type('email', 'john.doe@example.com')

                ->type('password', 'secretpassword')

                ->type('password_confirmation', 'secretpassword')

                ->press('REGISTER')

                ->assertPathIs('/home');
        });
    }

    public function testTeamPage()
    {
        $this->browse(function ($browser) {
            $browser
                ->visit('/home')

                ->clickLink('Team')

                ->assertSee('Contact');
        });
    }

    public function testNewsPage()
    {
        $this->browse(function ($browser) {
            $browser
                ->visit('/')

                ->clickLink('News')

                ->assertPathIs('/news')

                ->assertSee('Arsenal')

                ->click('#Arsenal')

                ->assertSee('read more...');
        });
    }

    public function testTournamentPage()
    {
        $this->browse(function ($browser) {
            $browser
                ->visit('/')

                ->clickLink('Create Tournament')

                ->assertSee('Home');

            // ->assertSee('Login');

        });
    }


    public function testLogOut()
    {

        $user = factory(User::class)->create([
            'email' => 'taylor@laravel.com',
            'password' =>bcrypt('password')
        ]);

        $this->browse(function ($browser) use ($user) {
            $browser
                ->visit('/login')

                ->type('#email', 'example@email.com')

                ->type('#password', 'password')

                ->press('LOGIN')

                ->assertPathIs('/home')
                
                ->clickLink('Logout')
                
                ->assertPathIs('/');
        });
    }
}
