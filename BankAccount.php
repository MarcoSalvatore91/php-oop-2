<?php

class BankAccount
{
    private $number;
    private $date_expire;
    private $balance;

    public function __construct($number, $date_expire, $balance)
    {
        $this->setNumber($number);
        $this->setDateExpire($date_expire);
        $this->setBalance($balance);
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

    public function setDateExpire($date_expire)
    {
        if ((is_numeric($date_expire)) && $date_expire < 2022) return 'Carta Scaduta';
        $this->date_expire = $date_expire;
    }

    public function getDateExpire()
    {
        return $this->date_expire;
    }

    public function setBalance($balance)
    {
        if (!(is_numeric($balance)) || $balance <= 0) return;
        $this->balance = $balance;
    }

    public function getBalance()
    {
        return $this->balance;
    }
}
