<?php
    session_start();

    if(isset($_POST['add'])) {
        $_SESSION['fname']  =  $_POST['fname'];
        $_SESSION['lname']  =  $_POST['lname'];
        $_SESSION['mobile'] = $_POST['mobile'];
        $_SESSION['address']   = $_POST['address'];
    ?>
<html>
  <head> 
    <title>Admin </title>
    <style>
     .container
     {
        width: 700px;
        height: 500px;
        border: 1px solid black;
		padding:7px;
		margin-left:30%;
	}
    .container1
    {
        width: 700px;
        height: 80px;
        border: 1px solid;
        background-color: blue;
    }
    

    </style>
  </head>
  <body> 
     <div class = "container">
       <div class= "container1">
       <h4 style ="color:white"> Admin <div style ="text-align: right;"><a href = "#" style="color:white">MOHs<a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
       <a href = "#" style="color:white">Logout</a></div> 
        </h4></div>
        <div style = "margin-left:10%;margin-top: 25px;">
        <form action = "" method = "POST">
           MOH id: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type ="text" name = "id"><br><br>
          Name of the MOH:&nbsp<input type ="text" name = "MOH_name"> <br><br>
          District: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type ="text" name = "district"><br><br>
          Name of the MOH:&nbsp<input type ="text" name = "MOH_name"> <br><br>
           First Name:&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type ="text" name = "fname"><br><br>
           Last Name:&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type ="text" name = "lname"><br><br>
           Address:&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp<input type ="text" name = "Address"><br><br>
           Mobile No:&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type ="text" name = "mobile"><br><br>
           Password:&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   <input type ="password" name = "password"><br><br><br><br>
           <button name="add">ADD</button> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
           <button name = "clear">CLEAR</button>

        </form>
        </div>
     </div>
      <?php
      $user = "admin";
      if($user == "admin"){
        ?><button>admin name</button> <button>Admin menu1</button><button> admin
      }



     ?>








  </body>
</html>