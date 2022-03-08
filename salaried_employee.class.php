<?php
/**
 * Author: Isaac Lowe
 * Date: 3/8/2022
 * File: salaried_employee.class.php
 * Description:
 */
require_once "employee.class.php";
class SalariedEmployee extends Employee
{
    //private variable for employee salary
    private  $weekly_salary;

    //constructor for each object
    public function __construct($person, $ssn, $weekly_salary){
        parent::__construct($person, $ssn);
        $this->weekly_salary = $weekly_salary;
    }

    //getter for WeeklySalary
    public function getWeeklySalary()
    {
        return $this->weekly_salary;
    }

    //Payment amount is always just base weekly salary
    public function getPaymentAmount(){
        return $this->weekly_salary;
    }

    //Prints all variables as a singular string
    public function toString(){
        parent::toString();
        return("Weekly Salary: " . $this->getWeeklySalary() . "<br> Payment Amount: " . $this->getPaymentAmount());
    }

}