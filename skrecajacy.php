<?php
class Skrecajacy extends Pojazd {
  public $kierunek;

  public function zwrot($value)
  {
    $this->kierunek += $value;
  }
  public function show_zwrot()
  {
    return $this->kierunek;
  }
  public function zwolnij($value)
  {
    $this ->v =20;
    parent::zwolnij(6);
  }

}


 ?>
