<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class JoinRoomControllerTest extends TestCase
{
    use WithoutMiddleware;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testJoinToRoom()
    {
        $response = $this->json('POST','/',['first_name'=>'Cuong','last_name'=>'Nguyen','email'=>'abc@gmail.com']);

        $response->assertStatus(200);
    }
}
