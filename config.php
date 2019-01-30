<?php include("server.php");

if(empty($_SESSION["username"])){
    header("location: login.php");
}
//ovaj dio sluzi da se zabrani pristup stranicama ako korisnik nije prijavljen redirekta ga na prijava.php