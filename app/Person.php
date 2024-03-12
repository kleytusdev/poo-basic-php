<?php

class Person
{
  public function __construct(
    protected string $name,
    private int $age,
  ) {
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName(string $name)
  {
    $this->name = $name;
  }

  public function getAge()
  {
    return $this->age;
  }

  public function setAge(int $age)
  {
    $this->age = $age;
  }

  public function showInformationByPerson()
  {
    echo "Nombre: {$this->name}<br>";
    echo "Edad: {$this->age} años<br>";
  }
}
