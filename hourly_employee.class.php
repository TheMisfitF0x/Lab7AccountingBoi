<?php
/**
 * Author: Isaac Lowe
 * Date: 3/8/2022
 * File: hourly_employee.class.php
 * Description:
 */

class HourlyEmployee extends Employee
{
    private $wage;
    private $hours;

    public function __construct($wage,$hours){
        $this->wage = $wage;
        $this->hours = $hours;
    }

    public function getWage()
    {
        return $this->wage;
    }

    public function getHours()
    {
        return $this->hours;
    }

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

    public function toString(){
        return("Total Hours: " . $this->getHours() . "Current Wage: " . $this->getWage() . " Payment Amount: " .  $this->getPaymentAmount());
    }


}