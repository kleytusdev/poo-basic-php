<?php

require_once 'Person.php';

class Employee extends Person
{
  public function __construct(
    string $name,
    int $age,
    private float $salary,
    private string $region,
  ) {
    parent::__construct($name, $age);
  }

  public function getRegion()
  {
    return $this->region;
  }

  public function setRegion(string $region)
  {
    $this->region = $region;
  }

  public function getSalary()
  {
    return $this->salary;
  }

  public function setSalary(float $salary)
  {
    $this->salary = $salary;
  }

  public function showInformation()
  {
    parent::showInformationByPerson();
    echo "Departamento: {$this->region}<br>";
    echo "Salario: {$this->salary}<br><br>";
  }
}
