<?php

require_once __DIR__ . '/Address.php';

class Customers extends Address
{
    private $first_name;
    private $last_name;
    private $age;

    public function __construct($first_name, $last_name, $age, $city, $street, $zip, $country)
    {
        parent::__construct($this->setCity($city), $this->setStreet($street), $this->setZip($zip), $this->setCountry($country));
        $this->setFirstName($first_name);
        $this->setLastName($last_name);
        $this->setAge($age);
    }

    public function setFirstName($first_name)
    {
        if (is_numeric($first_name)) return;
        $this->first_name = $first_name;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function setLastName($last_name)
    {
        if (is_numeric($last_name)) return;
        $this->last_name = $last_name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function setAge($age)
    {
        if (is_string($age) || $age > 18) return;
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }
}
