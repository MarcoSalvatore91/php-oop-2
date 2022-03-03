<?php

class Customers
{
    public $first_name;
    public $last_name;
    public float $age;

    public function __construct($first_name, $last_name, float $age)
    {
        $this->setFirstName($first_name);
        $this->setLastName($last_name);
        $this->setAge($age);
    }

    public function setFirstName($first_name)
    {
        if (!is_numeric($first_name)) return
            $this->first_name = $first_name;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function setLastName($last_name)
    {
        if (!is_numeric($last_name)) return
            $this->last_name = $last_name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function setAge($age)
    {
        if (!is_string($age) || $age > 18) return
            $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }
}
