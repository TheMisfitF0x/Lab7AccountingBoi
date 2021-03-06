<?php

/**
 * Author:Evan Minor
 * Date: 3/8/2022
 * File: commissionemployee.php
 * Description: This will calculate how much
 */
require_once 'employee.class.php';
class CommissionEmployee extends Employee
{
    //declaring Private Variables
    private $sales;
    private $commission_rate;

    //constructor
    public function __construct($s,$cr){
        $this->sales = $s;
        $this->commission_rate = $cr;

    }
    public function getSales(){
        return $this->sales;
    }

    public function getCommissionRate(){
        return $this->commission_rate;
    }

    public function getPaymentAmount(){
        return ($this->sales * $this->commission_rate);
    }

    public function toString()
    {
        return "$this->sales". "$this->commission_rate";
    }


}