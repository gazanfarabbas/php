<?php
class A{

	function A($a,$b){
		echo "This is construct function with class name and it is autometically call. when create an Object ";
	}

	function __construct($a,$b){
		 $this->a = $a;
		 $this->b = $b;
		 	echo $this->a + $this->b;
		echo "<br />If u create both function then this __construct is called";
	}
}


$obj = new A(10,2);



?>
