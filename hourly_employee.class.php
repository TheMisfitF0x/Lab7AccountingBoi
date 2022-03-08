<?php
/**
 * Author: Isaac Lowe
 * Date: 3/8/2022
 * File: hourly_employee.class.php
 * Description:
 */
require 'employee.class.php';

class HourlyEmployee extends Employee
{
    //private variables for each employee
    private $wage;
    private $hours;

    //constructor for each object
    public function __construct($person, $ssn,$wage,$hours){
        parent::__construct($person, $ssn);
        $this->wage = $wage;
        $this->hours = $hours;
    }
    // getters for wage and hours
    public function getWage()
    {
        return $this->wage;
    }

    public function getHours()
    {
        return $this->hours;
    }

    //function for retrieving payment amount for employee, employee's over 40 hours receive 1.5x rate.
    public function getPaymentAmount(){
        if($this->hours > 40){
            $overtimeHours = $this->hours - 40;
            $regularHours = 40;

            $overtimePay = $overtimeHours * $this->wage * 1.5;
            $regularPayRate = $regularHours * $this->wage;

            return $overtimePay + $regularPayRate;
        }else{
            return $this->hours * $this->wage;
        }

    }

    //prints all as a single string
    public function toString(){
        parent::toString();
        return("Total Hours: " . $this->getHours() . "Current Wage: " . $this->getWage() . " Payment Amount: " .  $this->getPaymentAmount());
    }


}