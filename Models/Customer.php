<?php

class Customer
{
    protected $paymentMethod = null;

    public function __construct(protected String $name, protected String $email, protected String $address, protected Bool $registered = false, protected int $discount = 0)
    {
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
    }

    public function insertCreditCard(CreditCard $card)
    {
    }

    public function makePayment($totalAmount)
    {
    }

    public function getDiscount()
    {
        return $this->discount;
    }
}
