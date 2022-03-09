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

//invoices for invoice portion of classes.
$invoice1 = new Invoice(4653, "beans part", 20, 3.34);
$invoice2 = new Invoice(4532, "apple", 5, 3.76);

//Employee's for employee and person portion of objects.
$p1 = new Person("Isaac","Lowe");
$employee1 = new HourlyEmployee($p1,2131,8.5,50);
$employee2 = new SalariedEmployee($p1,2131,500.0);

//need further implemntation, not working.
//$employee3 = new CommissionEmployee($p1,2131,6.5,132);
//$employee4 = new BasePlusCommissionEmployee($p1,2131,8.5);



echo "Invoice 1:<br>" . $invoice1->toString();

echo "<br><br>Employee1:<br>" . $employee1->toString();
echo "<br><br>Employee2:<br>" . $employee2->toString();
//echo "<br><br>Employee3:<br>" . $employee3->toString();
//echo "<br><br>Employee4:<br>" . $employee4->toString();

//echo Invoice::getInvoiceCount();
