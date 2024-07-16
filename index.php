<?php
include "task4.2.php" ;
include "taskEmployee.php";
include "taskInvoiceItem.php";
include "taskAccount.php";
include "taskShape.php";
//test student
$newStudent=new student("mohamed","mansura","unviersty",2010,9.5);
echo $newStudent->toString();
$newStudent->setAddress("cairo");
$newStudent->setFee(10);
print ("</br>--------------</br>");
echo $newStudent->toString();
print ("</br>--------------</br>");
//test staff
$newStaff=new staff("ahmed","egypt" , "first School" ,2000);
print ($newStaff->toString());
$newStaff->setpay(10000);
print ("</br>--------------</br>");
print ($newStaff->toString());
print ("</br>--------------</br>");
//test employee
$newEmp=new employee(2,"eslam","osama",5000,);
echo $newEmp->toString();
print ("</br>--------------</br>");
$newEmp->setSallery(9000);
echo $newEmp->toString();
print ("</br>--------------</br>");
$newIn=new invoiceItem(10,"desc",1000,1.1);
echo $newIn->toString();
print ("</br>--------------</br>");
$newIn->setUnitPrice(1.2);
echo $newIn->toString();
print ("</br>--------------</br>");
?>