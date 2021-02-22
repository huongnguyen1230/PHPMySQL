<?php
require 'Employee.php';

$employee1 = new Employee();
$employee2 = new Employee();
$employee3 = new Employee();

$employee1 ->setManNo(01);
$employee2 ->setManNo(02);
$employee3 ->setManNo(03);

$employee1 ->setName(' john');
$employee2 ->setName(' lili');
$employee3 ->setName(' tom');

echo $employee1 ->getManNo();
echo $employee1 ->getName();
echo "<br>";
echo $employee2 ->getManNo();
echo $employee2 ->getName();
echo "<br>";
echo $employee3 ->getManNo();
echo $employee3 ->getName();

