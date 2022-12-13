<?php

class Cart
{
    protected $products = [];
    public function __construct(protected Customer $customer)
    {
        $this->customer = $customer;
    }

    public function addProduct(Product $product, $quantity)
    {
        array_unshift(
            $this->products,
            [
                'product' => $product->getName(),
                'amount' => $quantity * $product->getPrice(),
                'totalQuantity' => $quantity
            ]
        );
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function getTotal()
    {
        $total = array_map(function ($product) {
            return $product['amount'];
        }, $this->products);
        //var_dump($total);
        $totalAmount = array_sum($total);
        $customer_discount = 20;

        return ($customer_discount > 0) ? $totalAmount * $customer_discount / 100 : $totalAmount;
    }
}
