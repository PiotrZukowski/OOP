<!DOCTYPE html>
<html>
<head>
	<title>OOP w PHP</title>
	<meta charset="utf-8" />
</head>
<body>
<?php
class Pojazd {
	public $v;
	public $v_max;

  function __construct($v_pocz, $_v_mx){
    $this->v=$v_pocz;
    if($this->v >$this->v_max) $this-> = $this->v_max;
  }
	public function przyspiesz($value) {
		$this->v = $this->v + $value;
		if($this->v > $this->v_max) {
			$this->v = $this->v_max;
		}
	}
	public function zwolnij($value) {
		$this->v -= $value;
		if($this-> < 0) $this->v = 0;
	}
	public function show() {
		return $this->v;
	}

}

$szynobus = new Pojazd();


?>
</body>
</html>
