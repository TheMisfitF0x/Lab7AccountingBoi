<?php
/**
 * Author: Logan Douglass
 * Date: 3/8/2022
 * File: payable.class.php
 * Description: Interface that initializes getPaymentAmount and toString methods. Used for many classes
 */
interface Payable
{
    public function getPaymentAmount();
    public function toString();
}