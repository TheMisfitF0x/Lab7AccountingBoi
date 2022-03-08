<?php
/**
 * Author: Logan Douglass
 * Date: 3/8/2022
 * File: invoice.class.php
 * Description: Responsible for attributes and methods related to invoices.
 */
//Imports
require_once 'payable.class.php';

class Invoice implements Payable
{
    //Attributes
    private $part_number;
    private $part_description;
    private $quantity;
    private $price_per_item;
    private static $invoice_count;

    //Constructor
    public function __construct($part_number, $part_description, $quantity, $price_per_item){
        $this->part_number = $part_number;
        $this->part_description = $part_description;
        $this->quantity = $quantity;
        $this->price_per_item = $price_per_item;
        self::$invoice_count++;
    }

    //Getters
    public function getPartNumber(){
        return $this->part_number;
    }

    public function getPartDescription(){
        return $this->part_description;
    }

    public function getQuantity(){
        return $this->quantity;
    }

    public function getPricePerItem(){
        return $this->price_per_item;
    }

    public function getPaymentAmount()
    {
        return $this->price_per_item * $this->quantity;
    }

    //toString returns all attributes as a string
    public function toString()
    {
        return ("Part Number: " . $this->part_number .
            "<br>Part Description: " . $this->part_description .
            "<br>Quantity: " . $this->quantity .
            "<br>Price Per Item: $" . number_format($this->price_per_item, 2) .
            "<br>Payment Amount: $" . number_format($this->getPaymentAmount(), 2));
    }

    //Returns the count of invoice objects
    public static function getInvoiceCount(){
        return self::$invoice_count;
    }
}