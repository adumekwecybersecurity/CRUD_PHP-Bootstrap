<html>
    <style>
    body{
    background-color:#0880e8;
    background-size: cover;
    background-repeat: no-repeat;
}
    </style>
<body>
    
<?php
 /*INSERT FUNCTION */
/*My sql code to connect to the Database After Student Register*/
 $con=mysqli_connect("localhost", "root", "","biaportal") or die("Cannot connect to server");
 
$Fname=$_POST["Fname"];
$Mname=$_POST["Mname"];
$Sname=$_POST["Sname"];
$email=$_POST["email"];
$username=$_POST["username"];
$password=$_POST["old"];
$zonecode=$_POST["zonecode"];
$Mnum=$_POST["Mnum"];
$mcountry=$_POST["mcountry"];
$gender=$_POST["gender"];
$Address=$_POST["Address"];
$cb2=$_POST["cb2"];
 
$insert_sql="INSERT INTO biaregistration VALUES('$Fname', '$Mname', '$Sname','$email','$username','$password','$zonecode','$Mnum','$mcountry','$gender','$Address','$cb2')";
$sql_result = mysqli_query($con,$insert_sql) or die("Error in inserting data due to ".mysqli_error($con));

if($sql_result){
echo '<span style="font-size:25px; color:white; text-align:center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'."You Have Succesfully Registered for Our January 2021 Event."; 
    
    
}
else{

echo "Registration Wasn't Succesful, Kindly Contac the Support Team.";
 
}?>
<h5>Click Here to&nbsp;&nbsp;<a href="index.html">Continue</a></h5>
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
        &copy; Copyright <strong style="color:white"><span >BIA</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        
        Designed by <b><a href="index.html" style="color:white">BIA</a></b>
      </div>
    </div>
        </footer> 
    </body>
</html> 




    







    


 
 






