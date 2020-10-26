<?php
namespace Filter;

class Person
{

    protected $age;

    protected $name;

    protected $gender;

    protected $maritalStatus;

    public function __construct($name, $age, $gender, $marit)
    {
        $this->age = $age;
        $this->name = $name;
        $this->gender = $gender;
        $this->maritalStatus = $marit;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function getMaritalstatus()
    {
        return $this->maritalStatus;
    }
}