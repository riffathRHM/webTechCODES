<a href ="dashboard.php?action=logout"><button style ="float:right" type ="button" name ="logout">Logout</button></a>
<br><br>
Welcome!
<?php
class product
{
	private $productId;
	private $productName;
	private $price;
	
	public function __construct($id,$name,$price)
	{
		$this->productId = $id;
		$this->productName = $name;
		$this->price = $price;
	}
	public function getProductId()
	{
		return $this->productId;
	}
	public function getproductName()
	{
		return $this->productName;
	}
	public function getprice()
	{
		return $this->price;
	}
	
	
	
	
}
$products = array(1=>new product(1,"Bag",2000.00),2=>new product(2,"watch",1000.00),3=> new product(3,"Ball",100.00));
?>
<h1> Product List</h1>
<table border="solid 1px">
 <tr>
    <th>Product ID</th>
	<th>Product Name</th>
	<th>Price</th>
	<th>Actions</th>
 </tr>
 <?php
    foreach($products as $product)
	{
		?>
		<tr>
		<td> <?php echo $product ->getProductId();?>
		</td>
		<td> <?php echo $product ->getproductName();?>
		</td>
		<td> <?php echo $product ->getprice();?>
		</td>
		<td> <a href="dashboard.php?action=addItem&amp;productId=<?php echo $product->getProductId();?>">ADD</a></td>
		</tr>
		<?php
		
	}	





  ?>
</table>







<?php
/* session_start();
echo $_SESSION["username"] ;
echo $_COOKIE["username"]."!";
if(isset($_GET["action"]) and $_GET["action"]=="logout") {      
    $_SESSION = array();
    session_destroy();  
    //setcookie("username","",time()-3600,"","",false,true);
              header("location:index.php");
  } */


?>