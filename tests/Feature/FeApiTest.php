<?php

namespace Tests\Feature;

use Tests\TestCase;

class FeApiTest extends TestCase
{
    public function test_tes_fe_endpoint_returns_success_and_json(): void
    {
        $response = $this->get('/tes-fe');

        $response->assertStatus(200);
        $response->assertJson([
            'status' => 'success',
        ]);
        $response->assertJsonStructure([
            'status',
            'message',
            'server_time',
            'data' => [
                '*' => ['id', 'nama', 'harga']
            ]
        ]);
    }
}
