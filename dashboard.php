<a href ="dashboard.php?action=logout"><button style ="float:right" type ="button" name ="logout">Logout</button>
<br><br>
Welcome!
<?php
echo $_COOKIE["username"]."!";
if(isset($_GET["action"]) and $_GET["action"]=="logout") {        
    setcookie("username","",time()-3600,"","",false,true);
              header("location:index.php");
  }
      

?>

