<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/')
                ->waitFor('@vegify-splash-logo')
                ->assertSee('Home');

            $browser
                ->resize(360, 1500)
                ->screenshot('1-xs')
                ->resize(640, 1500)
                ->screenshot('2-sm')
                ->resize(768, 1500)
                ->screenshot('3-md')
                ->resize(1024, 1500)
                ->screenshot('4-lg')
                ->resize(1280, 1500)
                ->screenshot('5-xl')
                ->resize(1536, 1500)
                ->screenshot('6-2xl');
        });
    }
}
