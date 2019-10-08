<?php
/**
 * Created by PhpStorm.
 * User: PHP
 * Date: 08.10.2019
 * Time: 20:21
 */

class Person
{
    private $firstName;
    private $lastName;
    private $age;

    public function __construct($firstName)
    {
        $this->firstName = $firstName;
    }


    public function getFirstName()
    {
        return $this->firstName;
    }


    public function changeName($firstName)
    {
        $this->firstName = $firstName;
    }


    public function getLastName()
    {
        return $this->lastName;
    }


    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }


    public function getAge()
    {
        return $this->age;
    }


    public function setAge($age)
    {
        $this->age = $age;
    }



}

class  Admin extends Person
{

}