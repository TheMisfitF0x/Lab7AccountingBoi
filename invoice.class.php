<?php

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
        $this->price_per_item;
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
        return $this->getPricePerItem();
    }
}