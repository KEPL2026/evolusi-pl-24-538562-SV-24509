<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ItemTest extends TestCase
{
    use RefreshDatabase; // mereset database setiap tes berjalan

    public function test_can_view_inventory_page()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_can_add_new_item()
    {
        $response = $this->post('/items', [
            'name' => 'Laptop',
            'stock' => 10
        ]);

        $response->assertRedirect('/');
        $this->assertDatabaseHas('items', [
            'name' => 'Laptop',
            'stock' => 10
        ]);
    }
}
