<?php
interface Employee
{
    public function getEmployeeType();
}

class Clerk implements Employee
{
    public function getEmployeeType()
    {
        echo "\nI am a Clerk.";
    }
}
class FullStackDeveloper implements Employee
{
    public function getEmployeeType()
    {
        echo "\nI am a Full Stack Developer.";
    }
}
class Company implements Employee
{
    public $employee;
    public function __construct(Employee $employee)
    {
        $this->employee = $employee;
    }
    public function getEmployeeType()
    {
        $this->employee->getEmployeeType();
    }
}

$clerk = new Clerk();
$fullStackDeveloper = new FullStackDeveloper();
$clerkCompany = new Company($clerk);
$fullStackDeveloperCompany = new Company($fullStackDeveloper);
$clerkCompany->getEmployeeType();
$fullStackDeveloperCompany->getEmployeeType();