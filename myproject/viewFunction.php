<html> 
<head>
<style>
table

{

border-style:solid;

border-width:2px;

border-color:pink;

    align-content: center;
    text-align: center;
    margin-left: 210;

}
    h1{
        text-align: center;
    }
    h3{
        text-align: center;
    }
    h2{
        text-align: center;
        color: white;
    }


</style>

</head>
<body bgcolor="#85C1E9"> 
    <body bgcolor="#85C1E9">
    <h1 class="logo mr-auto"><b>BIA Inc.</b></h1>
    <h2>THIS IS THE DATA OF ALL REGISTERED USERS.</h2><br>
<?php
    echo "<table border='25'>
    <tr>
    <td><b>Username</b></td>
<td><b>First Name</b></td>
<td><b>Middle Name</b></td>
<td><b>Surname</b></td>
<td><b>Address</b></td> 
<td><b>Password</b></td>
<td><b>Country Code</b></td>
<td><b>Phone Number</b></td>
</tr>";
$con=mysqli_connect("localhost", "root", "","biaportal") or die("Cannot connect to server.".mysqli_error($con));
$sql="SELECT * FROM biaregistration";
$result=mysqli_query($con,$sql) or die("Cannot execute sql."); 
while($ww=mysqli_fetch_array($result))
    {
$Username=$ww[4]; 
$First_Name=$ww[0];
$Middle_Name=$ww[1];
$Sur_Name=$ww[2];
$Residential_Address=$ww[10];
$Password=$ww[5];
$Country_Code=$ww[6];
$Phone_Number=$ww[7];
echo "<tr> 
<td><b>$Username</b></td> 
<td><b>$First_Name</b></td> 
<td><b>$Middle_Name</b></td>
<td><b>$Sur_Name</b></td>
<td><b>$Residential_Address</b></td> 
<td><b>$Password</b></td>
<td><b>$Country_Code</b></td>
<td><b>$Phone_Number</b></td>
</tr>";
}
echo "</table>";
?> 
        <br>
        <br>
        <br>
        <br>
        <br>
    <h3>Click<span>&nbsp;&nbsp;<a href="Admin.php">Here</a></span>&nbsp;&nbsp;To go Back to the Admin Page</h3>
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
 
