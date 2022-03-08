<?php
/**
 * Author: Isaac Lowe
 * Date: 3/8/2022
 * File: salaried_employee.class.php
 * Description:
 */

class SalariedEmployee extends Employee
{
    private  $weekly_salary;

    public function __construct($weekly_salary){
        $this->weekly_salary = $weekly_salary;
    }

    public function getWeeklySalary()
    {
        return $this->weekly_salary;
    }

    public function getPaymentAmount(){
        return $this->weekly_salary;
    }

    public function toString(){
        parent::toString();
        return("Weekly Salary: " . $this->getWeeklySalary() . " Payment Amount: " . $this->getPaymentAmount());
    }

}