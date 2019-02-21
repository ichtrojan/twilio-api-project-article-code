<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Student;

class ApiTest extends TestCase
{
    public function testGetStudents()
    {
        $response = $this->get('/api/students');
        $response->assertStatus(200);
    }

    public function testGetStudent()
    {
        // $student = factory(\App\Student::class)->create();
        $response = $this->get('/api/student/1');
        $response->assertStatus(200);
        $response->assertJsonStructure([
          [
            'id',
            'name',
            'course',
          ]
        ]);
    }
}
