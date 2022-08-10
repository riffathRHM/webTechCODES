<html>
  <head>   </head>
  <body >
   <?php
      define("USERNAME","admin");
      define("PASSWORD","admin123");
      if(isset($_POST["login"]) or isset($_COOKIE["username"]))
      {
          if($_COOKIE["username"]== USERNAME)
          {
            header("location:dashboard.php");
          }
          else if(empty($_POST["username"]) or empty($_POST["password"]))
          {
              echo "user name and password is empty,Please fill and try";
          }
          else if($_POST["username"]== USERNAME and $_POST["password"] == PASSWORD)
          {
              setcookie("username",USERNAME,time()+365*24*60*60,"","",false,true);
              header("location:dashboard.php");
          }
          else
          {
              header("location:index.php");
          }
      }



  ?>




  <h3 style = "text-align:center"> Login Form </h3>
  <div style= "border:3px solid blue;width:300px; padding:10px">
  <form  action ="" method ="post">
     username:<input type = "text" name = "username"><br><br>
     Password:<input type ="password" name = "password" ><br><br>
     &emsp;&emsp;<input type = "submit" name ="login" value = "login"> 
  


  </form>
  </div>
  </body>
</html>