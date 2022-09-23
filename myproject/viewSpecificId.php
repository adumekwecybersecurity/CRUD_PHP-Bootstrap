

<html>

<body bgcolor="#3895D3">
    <style>
    input{
        align-content: center;
        width: 270px;
        margin-bottom: 4px;
        
        }
        a:hover{
    color:yellow;
    }
        h1{
            color: white;
        }
        label{
            width: 240px;
            display: inline-block;
            text-align:right;
        }
    </style>
    

      <?php

 	$con=mysqli_connect("localhost", "root", "","biaportal") or die("Cannot connect to server.".mysqli_error($con));

 	$username=$_POST["username"];

 

 	$sql="SELECT * FROM biaregistration WHERE Username='$username'";

 	$result=mysqli_query($con,$sql) or die("Cannot execute sql.");

 

 	$row=mysqli_fetch_array($result);

 

 	if($username==$row[4])

 	{

 	?> 

     
     <h1 class="logo mr-auto"><b>BIA Inc.</b></h1>
    <h1 align="center">Below are customer's information details:</h1>
        <br>
        <br>
      <form align="center" > 
    <label><b>Username:</b></label>&nbsp;&nbsp;&nbsp;&nbsp;<input  type="text" name="username" value="<?php echo $row[4];?>"><br><br>
                               
    <label><b>First Name:</b></label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Fname" value="<?php echo $row[0];?>"><br><br>
                               
                             
    <label><b>Middle Name:</b></label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Mname" value="<?php echo $row[1];?>"><br><br>
                              
    <label><b>Surname:</b></label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Sname" value="<?php echo $row[2];?>"><br><br>
    
    <label><b>Country Code:</b></label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="zonecode" value="<?php echo $row[6];?>"><br><br>
                               
    <label><b>Phone Number:</b></label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Mnum" value="<?php echo $row[7];?>"><br><br>
        
    <label><b>Address:</b></label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Address" value="<?php echo $row[10];?>"><br><br>
        
    <label><b>Password:</b></label>&nbsp;&nbsp;&nbsp;&nbsp;<input name="password" type="text" value="<?php echo $row[5];?>"><br><br><br>
          <h3>Click<span>&nbsp;&nbsp;<a href="Admin.php">Here</a></span>&nbsp;&nbsp;To go Back to the Admin Page</h3>
         
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
    </form>
    
  
     
<?php }

else

 	echo "This User ID does not exist"; 
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



