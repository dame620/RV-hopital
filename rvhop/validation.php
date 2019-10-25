<?php
session_start();


$con = mysqli_connect('localhost','dame', 'da4930NDY!', 'rvhop');


$name = $_POST['user'];
$pass = $_POST['password'];
$s = "select * from usertable where name = '$name' && password = '$pass'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    
    $_SESSION['username'] = $name;
    header('location:home.php');
}

else{
    header('location:login.php?erreur=1');/*on lui demande de nous redireger ver login.php ms en
     emportant avec lui une variable erreur on l'appel variable d'url donc pour utiliser ce variable 
     on l'utilise avec 
     $GET
    */
    
}

  ?>