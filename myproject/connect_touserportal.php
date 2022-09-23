<html>
    <body>
        <style>
    body{
    background-color:#0880e8;
    background-size: cover;
    background-repeat: no-repeat;
}
            a:hover{
                color: aquamarine;
                
            }
    </style>
        <h1 style="color:white"><b>BIA Inc.</b></h1>
    
<?php
$con=mysqli_connect("localhost","root","","biaportal") or die("Cannot connect to server");

$username=$_POST["username"];
$password=$_POST["pwd"];
$sql="select * from biaregistration where Username='$username'"; 
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)==0){
echo '<span style="font-size:15px;color:White;text-align:center;">'."Username does not exist";
}

else{
$row=mysqli_fetch_array($result);

if($row["password"]=$password)
{
 session_start();
 $_SESSION["username"]==$username; 
header("Location:userportal.php");
echo  '<span style="font-size:17px;color:White;text-align:center;">'."You have Succesfully Logged In.";
echo "<br/>";
echo "<br/>";
echo '<span style="font-size:27px;color:White;text-align:center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'."Participants Tickets and Registration Details Be Made Available soon. Kindly Check Back.";
    
}
else{
    
    echo "Password wrong";
}



}?>
        <h2 style="color:white; text-align:center">Click Here to&nbsp;&nbsp;<a href="index.html">Continue</a></h2>
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
        &copy; Copyright <strong style="color:white"><span >BIA</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        
        Designed by <b><a href="index.html" style="color:white">BIA</a></b>
      </div>
    </div>
        </footer>
</body>
</html>