<?php
 interface Sellable
  {
	 public function addStock($num); 
	 public function sellItems();
	 public function getStockCount();
	  
	  
  }
  
 class Television implements Sellable
 {
	 private $screensize;
	 private $stockccount;
	 /* public function __construct($SS,$SC)
	 {
		 $this->screensize = $SS;
		 $this->stockccount = $SC;
	 } */
	 public function getScreensize()
	 {
		 return $this->$screensize;
	 }
	 public function setScreenSize($SS)
	 {
		 $this->screensize = $SS;
	 }
	 public function addStock($num)
	 {
		 $this->stockccount += $num;
	 }	 
	 public function sellItems()
	 {
		 $this->stockccount -= 1;
	 }
	 public function getStockCount()
	 {
		 return $this->stockccount;
	 }
	  
	 
  }
  $tv1 = new Television();
  $tv1->setScreenSize("14");
  $tv1->addStock(50);
  
  print($tv1->getStockCount());
  echo "<br>";
  $tv1->sellItems();
   print($tv1->getStockCount());
   echo "<br>";
  
  class TennisBall implements Sellable
  {
	  private $count_b;
	  private $color;
	  public function getColor()
	 {
		 return $this->$color;
	 }
	 public function setColor($color)
	 {
		 $this->color = $color;
	 }
	 public function addStock($num)
	 {
		 $this->count_b += $num;
	 }	 
	 public function sellItems()
	 {
		 $this->count_b -= 1;
	 }
	 public function getStockCount()
	 {
		 return $this->count_b;
	 }
	  
  }
   $b1 = new TennisBall();
   $b1->addStock(12);
   $b1->sellItems();
   print($b1->getStockCount());
  
  
 












?>