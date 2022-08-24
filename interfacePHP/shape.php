<?php
 abstract class shape
 {  
    protected $color;
	protected $filled;
	public function __construct($color,$filled)
	{
		$this->color = $color;
		$this->filled = $filled;
	}
	abstract public function getArea();
	
	public function setColor($col)
	{
		echo "<br> i am from parent class </br>";
	
		$this->color = $col;
	}
	public function getColor()
	{
		return $this->color;
	}
	public function isFilled()
	{
		return $this->filled;
	}
	public function makeHollow()
	{
		$this->filled = false;
	}
	public function fill()
	{
		$this->filled = true;
	}
	 
}
//$shape1 = new shape("red",true);
//print_r($shape1);
//echo "<br>".$shape1->getColor();

class square extends shape{
	private $length;
	public function __construct($color,$filled,$l)
	{
		$this->length = $l;
		parent::__construct($color,$filled); #like super class in java
		
	}
	public function setColor($col)
	{
		echo "<br>setting up color as {$this->color}<br>";
	}
	public function setLength($s1)
	{
		$this->length = $s1;
		
	}
	public function getLength()
	{
		return $this->length;
	}
	public function getArea()
	{
		return $this->length*$this->length;
	}
}
class circle extends shape
{
	private $radious;
	public function __construct($color,$filled,$rad)
	{
		$this->radious = $rad;
		parent::__construct($color,$filled); #like super class in java
		
	}
	public function getRadious()
	{
		return $this->radious;
	}
	public function setRadious($rad)
	{
		$this->radious = $rad;
	}
	public function getArea()
	{
		return M_PI * pow($this->radious,2);
	}
}
$s1 = new square("green",true,8);
$s1->setColor("pink");
$c1 = new circle("white",true,2);
$c1->setRadious(9);
//$shape1 = new shape("Red",true);
//print_r($shape1);
echo "<br>";
//echo "<br>".$shape1->getColor()."<br>";
print($c1->getArea());










?>