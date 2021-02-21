<?php
include_once 'Employee.php';
include_once 'EmployeeManager.php';

$man1=new Employee('toi');
$man2=new Employee('ban');

$man1->setBirthday('2000');
$man2->setBirthday('2010');

$man1->setAddress('ha noi');
$man2->setAddress('ha tay');

$man1->setPosition('director');
$man2->setPosition('manager');

$manManager=new EmployeeManager();
$manManager->add($man1);
$manManager->add($man2);
$employees=$manManager->getEmployee();

foreach ($employees as $employee){
    echo $employee->getName().' ';
    echo $employee->getBirthday().' ';
    echo $employee->getAddress().' ';
    echo $employee->getPosition().'<br>';
}