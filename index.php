<?php
Class A{}

Class B extends A{
	protected $a;
	public function __construct($a){
		$this->a=$a;
	}
}

Class C extends B {
	protected $b;
	public function __construct($a,$b){
		$this->b=$b;
		parent::__construct($a);
	}
}


$a1=new A();
$a2=new A();
$a3=new A();
$b4=new B($a3);
$c5=new C($b4,$a3,$a1);

var_dump($c5);
?>

