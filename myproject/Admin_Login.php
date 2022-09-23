<!DOCTYPE html>
<html>
    <head>
        <?php
        ?>
        <title>Admin Login Form</title>
        <link rel="stylesheet" type="text/css" href="admin_css.css">   
    </head>
    <body>
        <h1 style="color:white"><b>BIA Inc.</b></h1> 
    <div class="sherrycoco">
        <h2>Administrator Cpanel</h2></div>
    <form id="login" method="post" action="connect_toAdmin.php"><br>
        <div class="textme"><label><b>Username</b></label><input type="username" name="adminname" id="user" placeholder="Enter your Username" required /><br><br>
        <label><b>Password</b></label><input type="password" name="password" id="pwd" value="password1" placeholder="Enter your password here." required>
        <br><br>
        <!--<input type=Submit id=sub /> <span class="seperator"><input type=Reset id=rst /></span>-->
        <button type="submit" value="Submit" id="A1">Login</button> <button type="reset" value="Reset" id="A2">Cancel</button></div>  
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
        
        

        
</form>   
        
</body>
</html>
 <?php
        ?>