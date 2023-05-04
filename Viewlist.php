<!DOCTYPE html>
<html>
   <head>
      <title>Display data</title>
      <style type="text/css">
         table{
         border-collapse:collapse;
         width: 100%;
         font-family:monospace;
         font-size:25px
         text-align:left;
         }
      </style>
   </head>
   <body>
      <h2> View Book List </h2>
      </br> </br>
      <table border = "1">
         <tr>
            <th>Name</th>
            <th>Edit</th>
            <th>Delete</th>
         </tr>
         <?php
            $test1=mysqli_connect("localhost","bdjobs","my_username","my_password");
            if($test1-> connect_error){
                die("connection failed:". $test1->connect_error);
            
            }
            
            $sql = "SELECT phone,name,diseases,duration,doctor_dusename from parient_info ";
            $result = $conn-> query($sql);
            
            if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $phn=$row["phone"];
                echo"<tr>
                        
                        <td>". $row["name"]."</td>
                        
                       
                        <td><a href='delete.php?phn=$phn'>delete</a></td>
                        
                    </tr>";
            }
            echo"</table>";
            }
            else{
            echo"0 result";
            }
            
            $conn->close();
            
            
            ?>
      </table>
        </br></br>

        For paitent Information <a href="parient.php"> Click Here </a>

   </body>
</html>