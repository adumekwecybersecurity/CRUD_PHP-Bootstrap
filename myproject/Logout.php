<html>
    <body bgcolor="#85C1E9"> 
        <h1 class="logo mr-auto" style="color:white"><b>BIA Inc.</b></h1>
        <br>
        <br>
<?php
session_start();
if(isset($_SESSION["adminname"]))
{
    session_destroy();
    echo '<span style="font-size:30px; text-align:center">'. "You have been successfully logged off.";
}
else echo '<span style="font-size:30px;">'."No session exists or Session has expired. Please Log in again.";

?>
        <br>
        <br>
        <br>
        <b>Click<span>&nbsp;&nbsp;<a href="Admin_Login.php">Here</a></span>&nbsp;&nbsp;To Login Again.</b>
        
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