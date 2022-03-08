<?php
/**
 * Author: Isaac Lowe
 * Date: 3/8/2022
 * File: test_playable.php
 * Description:
 */

require_once 'invoice.class.php';

$invoice1 = new Invoice(4653, "beans part", 20, 3.34);
$invoice2 = new Invoice(4532, "apple", 5, 3.76);

echo "Invoice 1:<br>" . $invoice1->toString();
//echo Invoice::getInvoiceCount();
