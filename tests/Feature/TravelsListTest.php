<?php

namespace Tests\Feature;

use App\Models\Travels;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TravelsListTest extends TestCase
{
   
    use RefreshDatabase;

    public function test_travels_list(): void
    {

        Travels::factory(16)->create(['is_public' => true]);
        $response = $this->get('/api/V1/travels');
        $response->assertStatus(200);
        $response->assertJsonCount(15, 'data');
        $response->assertJsonPath('meta.last_page', 2);


    }
}
