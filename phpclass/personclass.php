<?php
class person
{
	private $name;
    private $age;
	private $gender;
	
	public function __construct($n,$a,$g)
	{
		$this->name =$n;
		$this->age = $a;
		$this->gender = $g;
	}
	
	public function setname($n)
	{
		$this->name = $n;
	}
	public function getname()
	{
		return $this->name;
	}
	  
	 
}

$p1 = new person("jenny",20,"female");
$p2 = new person("Raj",20,"male");
$p1->setname("Ravi");



echo print_r($p1); echo "<br>";
echo print_r($p2) ;echo "<br><br>";
?>

<?php
 class Account
 {
	private $customer;
    private $accountNo;
    private $balance;
	private static $annualIntrestRate=4;
    
    public function __construct($cu , $ac ,$bl,$rate)
    {
		$this->customer = $cu;
		$this->accountNo = $ac;
		$this->balance = $bl;
		//$this->annualIntrestRate = $rate;
		
	}	
	public function setInitialBalance()
	{
		return $this->balance;
	}
	public function deposite($amount)
	{
		$this->balance += $amount;
		//echo "$amount";
		return $this->balance;
	}
	public function withdrawel($amount)
	{
		$this->balance -= $amount;
		return $this->balance;
	}
	
	public function calculateMonthlyIntrest()
	{
		$savingBalance = ((self::$annualIntrestRate/100)*$this->balance)/12;
		return  $savingBalance;
	}
	public static function modifyIntrestRate($rate)
	{
		$savingBalance = ((self::$Rate/100)*$this->balance)/12;
		return  $savingBalance;
	}
	 
}
$ac1 = new Account("raja",123,25000,50);
$ac2 = new Account("raja",123,25000,100);
echo "Initial value is:";
print $ac1->setInitialBalance(); echo "<br>";
echo "deposite value is:";
print $ac1->deposite(2000); echo "<br>";
echo "calculateMonthlyIntrest:";

print $ac1->modifyIntrestRate(5); echo "<br>";
?>