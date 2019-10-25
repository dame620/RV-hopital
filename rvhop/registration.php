<?php
session_start();


$con = mysqli_connect('localhost','dame', 'da4930NDY!', 'rvhop');

if(!$con){
    die( "erreur de connexion a la base de donné" );
}

else{
$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from usertable where name = '$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    echo " username already taken";
}

else{
    $reg= " insert into usertable(name , password) values ('$name' , '$pass')";
    mysqli_query($con, $reg);
    echo "registration successful";

    header('location:login.php');
}
}
  ?>