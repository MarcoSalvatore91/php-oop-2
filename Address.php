<?php

class Address
{
    private $city;
    private $street;
    private $zip;
    private $country;

    public function __construct($city, $street, $zip, $country)
    {
        $this->setCity($city);
        $this->setStreet($street);
        $this->setZip($zip);
        $this->setCountry($country);
    }

    public function setCity($city)
    {
        if (!is_numeric($city)) return
            $this->city = $city;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setStreet($street)
    {
        if (is_numeric($street)) return;
        $this->street = $street;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function setZip($zip)
    {
        if (!(is_numeric($zip))) return;
        $this->zip = $zip;
    }

    public function getZip()
    {
        return $this->zip;
    }

    public function setCountry($country)
    {
        if (is_numeric($country)) return;
        $this->country = $country;
    }

    public function getCountry()
    {
        $this->country;
    }
}
