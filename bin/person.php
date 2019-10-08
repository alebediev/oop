<?php

require_once __DIR__ . '/../src/Person.php';

$mark = new Person('Mark');
//$mark->changeName('Mark');
echo $mark->getFirstName() . \PHP_EOL;