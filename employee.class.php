<?php

/**
 * Author: Logan Orender
 * Date: 3/8/2022
 * File: employee.class.php
 * Description:
 */
require_once "payable.class.php";
abstract class Employee implements Payable
{
    private $person;
    private $ssn;
    private static $employee_count;

    protected function __construct($person, $ssn)
    {
        $this->person = $person;
        $this->ssn = $ssn;
        self::$employee_count++;
    }

    public function getPerson()
    {
        return $this->person;
    }

    /**
     * @return mixed
     */
    public function getSSN()
    {
        return $this->ssn;
    }

    /**
     * @return mixed
     */
    public static function getEmployeeCount()
    {
        return self::$employee_count;
    }

    abstract public function getPaymentAmount();

    public function toString() {
        return $this->person->toString() . "<br>SSN: $this->ssn ";
    }

}