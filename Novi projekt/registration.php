<?php 

session_start();
header('location:prijavatest.php');
$con = mysqli_connect('localhost','root','','projekt');

mysqli_select_db($con, 'projekt');

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$s= "select * from korisnik where username = '$username'";
$result =  null;
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Username vec zauzeto!";
}else{
    $reg = "insert into korisnik(username, password, email) values ('$username','$password', '$email')";
    mysqli_query($con, $reg);
    echo "Uspjesna registracija";
}
?>