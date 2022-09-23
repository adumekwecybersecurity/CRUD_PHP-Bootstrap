<html>
<body bgcolor="#85C1E9">
<?php
$con=mysqli_connect("localhost","root","","biaportal") or die("Cannot connect to server.".mysqli_error($con));
$username=$_POST["username"];
$sql_delete="DELETE FROM biaregistration WHERE Username='$username'"; 
$sql_result=mysqli_query($con,$sql_delete)or die("Error in sql due to ".mysql_error());
if($sql_result){
        echo "Registered User Succesfully Deleted";
    }
        
    else{
       echo "Registered User cannot be Deleted or Not Found"; 
    }
        
    ?>
    <h3>Click Here to&nbsp;&nbsp;<a href="Admin.php">Continue.</a></h3>
    <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <footer style="text-align: center; color:Blue">
        <div class="container">
      <div class="copyright">
        &copy; Copyright <strong style="color:black"><span >BIA</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        
        Designed by <b><a href="index.html" style="color:black">BIA</a></b>
      </div>
    </div>
        </footer> 
    </body>
    </html>