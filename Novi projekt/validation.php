<?php 

session_start();


$con = mysqli_connect('localhost','root','','projekt');

mysqli_select_db($con, 'projekt');

$username = $_POST['username'];
$password = $_POST['password'];


$s= "select * from korisnik where username = '$username' && password = '$password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

$b= "select * from korisnik where username = '$username' && password = '$password' && user_type = 'admin'";

$res = mysqli_query($con, $b);

$count = mysqli_num_rows($res);

if($count == 1){
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    header('location:admin.php');
    echo "Uspjesna prijava!)";
}

elseif($num == 1){
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    header('location:test1.php');
    echo "Uspjesna prijava!)";
}

else{
    header('location:prijavatest.php?');
    echo "Pogresna lozinka ili username";
    
}
?>