<?php

/**
 * Author:Evan Minor
 * Date: 3/8/2022
 * File: commissionemployee.php
 * Description:
 */
class CommissionEmployee
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


}