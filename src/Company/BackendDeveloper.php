<?php

require_once __DIR__ . '/EmployeeInterface.php';
require_once __DIR__ . '/AbstractEmployee.php';

final class BackendDeveloper extends AbstractEmployee implements EmployeeInterface
{
    public function startWork()
    {
        $this->openIDE('PhpStorm');
    }

}