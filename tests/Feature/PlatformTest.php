<?php

namespace Tests\Feature;

use Faker\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Store;
use Tests\TestCase;

class PlatformTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_a_user_can_create_platform()
    {
        //$this->withoutExceptionHandling();

        $platform = [
            'platform' => 'Test Platform',
        ];

        $this->postJson("/api/stores", $platform)
            ->assertStatus(201)
            ->assertJson($platform);

        $this->assertDatabaseHas('stores', [
            'platform' => $platform['platform']
        ]);
    }

    public function test_a_user_can_view_platforms()
    {
        $this->getJson("/api/stores")
            ->assertStatus(200);
    }

    public function test_a_user_can_view_platform()
    {
        $store = new Store();
        $this->getJson("/api/stores/{$store->id}")
            ->assertStatus(200);
    }

    public function test_a_user_can_delete_platform()
    {
        $store = Store::first();

        if ($store) {
            $this->deleteJson("/api/stores/{$store->id}")
                ->assertStatus(204);
        }
    }

}
