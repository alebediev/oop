<?php
require_once __DIR__ . '/EmployeeInterface.php';

final class TeamLead
{

    /**
     * @var EmployeeInterface[]
     */
    private $employees = [];

    public function addEmployee(EmployeeInterface $employee)
    {
        $this->employees[] = $employee;
    }

    public function startWork()
    {
        foreach ($this->employees as $employee) {
            $employee->startWork();
        }
    }

}