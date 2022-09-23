<html>
<style>
a:hover{
color:yellow;
}
#specific{
   
    width: 300px;
    padding: 7px;
    font-size: medium;
    font-family: sans-serif;
    font-size: initial;
    font-style: revert;
    border: coral;
    border-radius: 8px;
    background-color: #e7e7e7;
    
    
     
}
    #view{
   
    width: 250px;
    padding: 7px;
    font-size: medium;
    font-family: sans-serif;
    font-size: initial;
    font-style: revert;
    border: coral;
    border-radius: 8px;
    background-color: #e7e7e7;
    
    
    
     
}
    
    #del{
   
    width: 180px;
    padding: 7px;
    font-size: medium;
    font-family: sans-serif;
    font-size: initial;
    font-style: revert;
    border: coral;
    border-radius: 8px;
    background-color: #e7e7e7;
    
    
     
}
    #view:hover{
        color:#9B2335;
    }
    
    h1{
        text-align: center;
        
    }
</style>
<body bgcolor="#85C1E9">
    <h1 class="logo mr-auto"><a href="Admin_Login.php" class="scrollto"><b>BIA Inc.</b></a></h1>
<?php
session_start();
    
$username=$_SESSION["adminname"];
 
echo '<span style="font-size:25px; color:crimson; text-align:center;">'. "Welcome $username";
if(isset($username))
    
{
    echo '<span style="font-size:25px; color:black;">'.'<h3>Administrative Control Action Panel</h3>';
    echo "<br/>";
    echo '<span style="font-size:20px; color:purple; text-align:center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'."Note: This is the ADMINISTRATIVE SECTION. If you are not an Administrator,kindly logg-off or Contact the I.T support team."
?>
    <br>
    <br>
    <div class="button1">
    <a href="ViewSpecific.html"><input type=Submit id=specific value="View Specific Registered Participants" /></a>&nbsp;&nbsp;<a href="viewFunction.php"><input type=Submit id=view value="View All Registered Participants" /></a>&nbsp;&nbsp;<a href="Deletefunction.html"><input type=Submit id=del value="Delete Participants" /></a></div>
    
    
    
    
    
    <br><br>
    <h3>Click Here to&nbsp;&nbsp;<a href="Logout.php">Logout</a></h3>
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
<?php
}
else{
    echo "No session exist or Session has expired. Kindly Log in again";
}?> 
</body>
</html>