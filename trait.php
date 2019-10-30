<?php
trait A1{
	public function abc(){
		echo "Trait one is called ";
	}
	public static function abc1(){
		echo "This static method of trait";
	}
	public abstract function abc2();
}
trait A2{
	public function xyz(){
		echo "Trait two is called ";
	}
}
Class A{
	use A1,A2{
		A1::abc();
	}
	public function __construct(){
		echo "This trait class use by class <br/>";
	}
	public function abc2(){
		echo "This is abstract class in trait";
	}
}
A1::abc1();
$obj  = new A();
//$obj->abc();
$obj->abc2();
//$obj->xyz();
?>