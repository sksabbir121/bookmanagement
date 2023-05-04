<?php

session_start();
	//dsn = new mysqli("localhost","bdjobs","my_username","my_password");


    require "test1.php";

	if(isset($_POST['btn'])){
        $name = $_POST['name'];
		$p_Name = $_POST['p_name'];
        $age = $_POST['age'];
        $date = $_POST['date'];
		$page= $_POST['page'];
		

        $sql = "INSERT INTO bolist( name, pname , name , age , date , page) VALUES ('$name','$p_name','$age ','$date','$page')";

        if(mysqli_query($test1,$sql))
        {
           echo "okk";
        }
        
        else
        {
           echo "not okk";
        
        }

		
	}




?>



<!DOCTYPE HTML>

<html>
   <head>
      <title>PHP Register Form</title>
      <style>
         *{ margin:0px; padding:0px;}
         body {margin: 0 auto; text-align: center;}
         .login-form{
         margin:0 auto;
         margin-top:50px;
         border:2px solid #000000;
         width: 400px; padding: 50px;}
         input{ padding:10px; }
      </style>
   </head>
   <body>
      <div class="login-form">
      <h2> Book register Form</h2>
      </br> </br>
      <form method="post" action="">
      <label>Name </label>         
        <input type="text" name="Name" size="15"/> <br> <br>  
        <label>P.name </label>     
        <input type="text" name="P.name" size="15"/> <br> <br>  
        <label> Age </label>         
        <input type="text" name="Age" size="15"/> <br> <br>
        <label> Date </label>         
        <input type="Date" name="Date" size="15"/> <br> <br> 
        <label> Page </label>         
        <input type="text" name="Page" size="15"/> <br> <br>     
          
         <button type="submit" name="btn">Add book</button>
      </form>
      <a href="Viewlist.php"> Viewlist Here </a>
   </body>
</html>