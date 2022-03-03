<?php

class BankAccount
{
    public $number;
    public $date_expire;
    public $balance;

    public function __construct($number, $date_expire, $balance)
    {
    }

    public function setNumber($number)
    {
        if (strlen($number) < 5) return 'Il codice di verifica deve contenere almeno 5 numeri';
        $this->number = $number;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setDateExpire($date_expire)
    {
    }
}
