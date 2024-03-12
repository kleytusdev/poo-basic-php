<?php

require_once 'Person.php';

class Client extends Person
{
  public function __construct(
    string $name,
    int $age,
    private string $dni,
    private float $discount
  ) {
    parent::__construct($name, $age);
  }

  public function getDni()
  {
    return $this->dni;
  }

  public function setDni($dni)
  {
    $this->dni = $dni;
  }

  public function getDiscount()
  {
    return $this->discount;
  }

  public function setDiscount($discount)
  {
    $this->discount = $discount;
  }

  public function showInformation()
  {
    parent::showInformationByPerson();
    echo "DNI: {$this->dni}<br>";
    echo "Descuento: {$this->discount}<br><br>";
  }
}
