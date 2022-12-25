<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UnitTest extends TestCase
{
      /**
     * A basic test example.
     *
     * @return void
     */
    public function test_store_product()
    {
        $response = $this->post('product');

        $response->assertStatus(200);
    }


    public function test_store_invoice()
    {
        $response = $this->post('invoice');

        $response->assertStatus(200);
    }



    public function test_index_invoice()
    {
        $response = $this->get('/all-invoice');

        $response->assertStatus(200);
    }

    
    public function test_index_product()
    {
        $response = $this->get('product');

        $response->assertStatus(200);
    }
    public function test_new_order()
    {
        $response = $this->get('/new-order');

        $response->assertStatus(200);
    }
}
