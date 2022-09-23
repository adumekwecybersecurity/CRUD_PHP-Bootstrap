 <?php
 /*INSERT FUNCTION */
/*My sql code to connect to the Database After Contact Information has been filled*/
 $con=mysqli_connect("localhost","root","","biaportal") or die("Cannot connect to server");
 
$name=$_POST["name"];
$email=$_POST["email"];
$subject=$_POST["subject"];
$message=$_POST["message"];

$insert_sql="INSERT INTO feedback VALUES('$name','$email','$subject','$message')";
$sql_result = mysqli_query($con,$insert_sql) or die("Error in inserting data due to ".mysqli_error($con));

if($sql_result){
echo "Thank you For Contacting Us."; 
    
}
else{

echo "your message wasn't succesful.";
 
}?>