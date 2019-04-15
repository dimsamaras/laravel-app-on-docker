<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class ProfileTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    /**
     * Test that a user has profile, then display the name.
     */
    public function testAUserHasProfile()
    {
        $user = factory(User::class)->create();

        $this->withoutExceptionHandling()->get('/profile/'.$user->name)->assertSee($user->name);
    }
}
