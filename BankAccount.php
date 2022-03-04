<?php

class BankAccount
{
    public $number;
    public $date_expire;
    public $balance;

    public function __construct($number, $date_expire, $balance)
    {
        $number->setNumber($number);
        $date_expire->setDateExpire();
        $balance->setBalance($balance);
    }

    public function setNumber($number)
    {
        if (strlen($number) < 5) return 'Il codice della carta deve contenere almeno 5 numeri';
        $this->number = $number;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setDateExpire()
    {
    }

    public function getDateExpire()
    {
        return $this->date_expire;
    }

    public function setBalance($balance)
    {
        if (!is_numeric($balance) && $balance <= 0) return
            $this->balance = $balance;
    }

    public function getBalance()
    {
        $this->balance;
    }
}

$user_2 = new BankAccount(123456, (2), 3);

var_dump($user_2);
