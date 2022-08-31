
<html>
  <head> </head>
  <body>
   
   <h3> Product Details </h3>
   <form method = "POST">
     id : &nbsp&nbsp <input type = "text" name = "id"><br><br>
     Name :   <input type = "text" name = "name"><br><br>
     Price :  <input type = "text" name = "price"><br><br>
     &emsp;<input type = "submit" name = "save" value = "submit">
  </form>
  <?php
    if(isset($_POST["save"]))
    {
       $products = simplexml_load_file('products.xml');
       $product = $products->addChild('product');
       $product->addAttribute('id',$_POST['id']);
       $product->addchild('name',$_POST['name']);
       $product->addchild('price',$_POST['price']);
       
       file_put_contents('products.xml',$products->asXML());
       header("location:add.php");


    }







 ?>
  </body>
</html>