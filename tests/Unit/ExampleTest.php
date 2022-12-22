<?php

namespace Tests\Unit;

use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_index_product()
    {
        $product = new ProductController;
       $pro = $product->index()->getStatusCode();
        $this->assertEquals(200,$pro);
    }
    public function test_create_product()
    {
        $product = new ProductController;
       $pro = $product->availableProducts()->getStatusCode();
      
        $this->assertEquals(200,$pro);
    }
    public function test_index_invoice()
    {
        $invoice = new InvoiceController;
       $pro = $invoice->index()->getStatusCode();
        $this->assertEquals(200,$pro);
    }
    public function test_create_invoice()
    {
        $invoice = new InvoiceController;
       $pro = $invoice->create()->getStatusCode();
        $this->assertEquals(200,$pro);
    }
    public function test_index_order()
    {
        $order = new OrderController;
       $pro = $order->index()->getStatusCode();
        $this->assertEquals(200,$pro);
    }
}
