<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ApiTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetStudents()
    {
      $response = $this->get('/api/students');
      $response->assertStatus(200);
    }
}
