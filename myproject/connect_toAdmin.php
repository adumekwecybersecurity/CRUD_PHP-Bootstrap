<html>
    <body bgcolor="#85C1E9">
        <h1 style="color:white"><b>BIA Inc.</b></h1>
    <?php  
/*ADMIN LOGIN SESSION FUNCTION */
$con=mysqli_connect("localhost","root","","biaportal") or die("Cannot connect to server");
$username=$_POST["adminname"]; 
$password=$_POST["password"];
$sql="select * from adminlogin where adminname='$username'"; 
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)==0){
echo "Username does not exist";
}
else{
$row=mysqli_fetch_array($result);
if($row["password"]==$password)
{
 session_start();
 $_SESSION["adminname"]=$username; 
header("Location:Admin.php"); 
echo "You have Succesfully Logged In.";
}
else{
    
    echo "Password wrong";
}

}
?>
<h3>Click Here to&nbsp;&nbsp;<a href="Admin_Login.php">Continue</a></h3>
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