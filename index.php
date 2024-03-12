<?php

declare(strict_types=1);

require_once 'app/Person.php';
require_once 'app/Employee.php';
require_once 'app/Client.php';

/**
 *  Ejemplo de herencia
 */
$employee = new Employee("Juan Pérez", 30, 200.4, "Lima");
$employee->showInformation();

$client = new Client("María López", 25, "12345678", 10.5);
$client->showInformation();

// /**
//  * Ejemplo de polimorfismo
//  */
echo "<br>";
echo "El salario de {$employee->getName()} es de S/{$employee->getSalary()}.<br>";
echo "El descuento de {$client->getName()} es de {$client->getDiscount()}%.<br>";
