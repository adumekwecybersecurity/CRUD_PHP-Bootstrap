 <?php
 /*SUBSCRIBE FOR NEWS LETTER  FUNCTION INTO DATABASE*/

 $con=mysqli_connect("localhost","root","","biaportal") or die("Cannot connect to server");
 
$email=$_POST["email"];

$insert_sql="INSERT INTO newsletter VALUES('$email')";
$sql_result = mysqli_query($con,$insert_sql) or die("Error in inserting data due to ".mysqli_error($con));

if($sql_result){
echo "You Have Subscribed to Our Monthly News Letter."; 
header("Location:index.html");  
}
else{

echo "Subscription Wasn't Succesful, Kindly Contact the Support Team.";
 
}?>