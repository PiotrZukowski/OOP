<!DOCTYPE html>
<html>
<head>
<title>OOP w PHP</title>
<meta charset="utf-8" />
</head>
<body>

<?php
function ladujKlasy($nazwaKlasy)
{
require "$nazwaKlasy.php";
}
spl_autoload_register('ladujKlasy');

class punkt{
  public $x;
  public $y;

  public function __construct($x,$y){
    $this->x=$x;
    $this->y=$y;
    }

    function pokasowe(){
      return "X=".$this->x."<br />"."Y=".$this->y;
      }


}

$obiekt=new punkt(10,20);
//$z=$obiekt->pokasowe();
//print($z);


class punkt3d extends punkt{
  //public $x;
  //public $y;
  public $z;

  public function __construct($x,$y,$z){
    //$this->x=$x;
    //$this->y=$y;
    parent::__construct($x,$y);
    $this->z=$z;
    }

    function pokasowe3d(){
      return "X=".$this->x."<br />"."Y=".$this->y."<br />"."Z=".$this->z;
      }


}

class prostokat extends punkt{
  function __construct($x,$y){
    parent:: __construct($x,$y);
  }
  function pole(){
    return $this->x*$this->y;
    }

    function obwod(){
      return ($this->x*2)+($this->y*2);
    }
}





//$obiekt=new punkt3d(10,20,30);
//$i=$obiekt->pokasowe3d();
//print($i);

$obiekt=new prostokat(2,2);
$p= $obiekt->pole();
$o= $obiekt->obwod();
print "Pole=".$p."<br />"."Obwod=".$o;






 ?>

</body>
</html>
