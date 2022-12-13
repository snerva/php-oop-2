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
        $this->paymentMethod = $card;
        return $this->paymentMethod;
    }

    public function makePayment($totalAmount)
    {
        $card_year = $this->paymentMethod->cardyear;
        $card_month = $this->paymentMethod->cardMonth;
        $current_year = date('Y');
        $current_month = date('m');

        //var_dump($card_year, $card_month, $current_month, $current_year);

        if ($card_year < $current_year || $card_month < $current_month && $card_year === $current_year) {
            throw new Exception("Error processing your Credit Card. Card Expired!", 1);
        } else {
            echo "Payment successful! Total amount: $totalAmount €";
        }
    }

    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function setStatus()
    {
        $this->registered = true;
    }
}
