<?php
session_start();
if(!isset($_SESSION['username'])){
   header('location:login.php');
}

?>
<!doctype html>
<html>
   <head>
       <title> Home page </title>
       <meta charset="utf-8"/>
   </head>
   <body>
   <!-- ceci nous permet de nous deconnecter et de retourner au page login.php-->
    <a href="logout.php">LOGOUT</a>
    <!-- ceci nous permet de voire welcome et le user exacte exemple welcome dame-->
    <h1> welcome <?php echo $_SESSION['username']; ?> </h1>

   </body>
</html>