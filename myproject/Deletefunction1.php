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

 

 	$sql_delete="DELETE * FROM biaregistration WHERE Username='$username'";

 	$sql_result=mysqli_query($con,$sql_delete) or die("Error in sql due to ".mysql_error()); if($sql_result)

 	{

 	?> 
 
<body bgcolor="#85C1E9">
     <h1 class="logo mr-auto" style="text-align: center;color: white"><b>BIA Inc.</b></h1>
    <h2 style="text-align: center;color: white">Delete Specific Participant</h2>
    
    <form name="Deletefunction" method="post" action="Deletefunction.php"> 
        <table width="220" border="border">
            <tr>
    <td><b>Enter Username:</b><input type="text" name="username" id="DeleteData" placeholder="Registered Username Here" required/><br><br>
        <input type=Submit id=sub value="Delete" />&nbsp;<input type=Reset id=sub value="Reset" /></td><br><br>
                </tr>
            </table>
        <br>
        <br>
        <br>
        <div style="text-align: center">
        <b >Click&nbsp;&nbsp;<a href="Admin.php">Here</a>&nbsp;&nbsp;To go Back to the Admin Page</b></div>
    </form>
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



