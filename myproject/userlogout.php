<html>
    <body bgcolor="#0880e8"> 
        <h1 style="color:White"><b>BIA Inc.</b></h1>
        <br>
        <br>
<?php
session_start();
if(isset($_SESSION["username"]))
{
    session_destroy();
    echo '<span style="font-size:30px; color:white">'. "You have been successfully logged off.";
    header("Location:index.html");
}
else echo '<span style="font-size:30px; color:white">'."No session exists or Session has expired. Please Log in again.";

?>
        <h6>Click Here to&nbsp;&nbsp;<a href="index.html">Continue</a></h6>
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