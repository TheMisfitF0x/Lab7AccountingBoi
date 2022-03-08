<?php
require_once 'payable.class.php';
class Invoice implements Payable
{
    private $part_number;
    private $part_description;
    private $quantity;
    private $price_per_item;
    private static $invoice_count;

    public function __construct($part_number, $part_description, $quantity, $price_per_item){
        $this->part_number = $part_number;
        $this->part_description = $part_description;
        $this->quantity = $quantity;
        $this->price_per_item = $price_per_item;
        self::$invoice_count++;
    }

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
        return $this->price_per_item();
    }

    public function getPaymentAmount()
    {
        return $this->price_per_item * $this->quantity;
    }

    public function toString()
    {
        return ("Part Number: " . $this->part_number .
            " Part Description: " . $this->part_description .
            " Quantity: " . $this->quantity .
            " Price Per Item: " . $this->price_per_item .
            " Payment Amount: " . $this->getPaymentAmount());
    }

    public static function getInvoiceCount(){
        return self::$invoice_count;
    }
}