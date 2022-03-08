<?php
/** Author: Isaac Lowe , Logan Orender, Logan Douglass, Evan Minor
 * Date: 3/8/2022
 * File: test_payable.php
 * Description:
 */
//requires for the invoice system
require_once 'invoice.class.php';

//
require_once 'person.class.php';
require_once 'employee.class.php';
require_once 'hourly_employee.class.php';
require_once 'salaried_employee.class.php';
require_once 'commissionemployee.php';
require_once 'basepluscommissionemployee.class.php';


$invoice1 = new Invoice(4653, "beans part", 20, 3.34);
$invoice2 = new Invoice(4532, "apple", 5, 3.76);
$p1 = new Person("Isaac","Lowe");
$employee1 = new HourlyEmployee($p1,2131,8.5,50);

echo "Invoice 1:<br>" . $invoice1->toString();
echo "Employee1:<br>" . $employee1->toString();
//echo Invoice::getInvoiceCount();
