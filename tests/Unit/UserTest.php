<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\user;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user =User::inRandomOrder()->first();
        $this->assertInternalType('int',$user->id);
        $this->assertInstanceOf('App\User',$user);
    }
}
