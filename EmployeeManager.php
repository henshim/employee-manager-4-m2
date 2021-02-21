<?php

include_once 'Employee.php';

class EmployeeManager
{
    private $employee;

    public function __construct()
    {
        $this->employee = [];
    }

    public function add($employee)
    {
        $this->employee[] = $employee;
    }

    /**
     * @return array
     */
    public function getEmployee()
    {
        return $this->employee;
    }
}