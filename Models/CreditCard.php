<?php

class CreditCard
{
    public function __construct(public String $number, public String $ccv, public String $cardMonth, public String $cardYear)
    {
        $this->number = $number;
        $this->ccv = $ccv;
        $this->cardMonth = $cardMonth;
        $this->cardYear = $cardYear;
    }
}
