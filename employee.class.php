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
    //Attributes of all employees
    private $person;
    private $ssn;

    //Count of all employees.
    private static $employee_count;


    //constructor
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
     * @return ssn
     */
    public function getSSN()
    {
        return $this->ssn;
    }

    /**
     * @return number of employees
     */
    public static function getEmployeeCount()
    {
        return self::$employee_count;
    }

    //Implemented by child classes
    abstract public function getPaymentAmount();

    public function toString() {
        return $this->person->toString() . "<br>SSN: $this->ssn ";
    }

}