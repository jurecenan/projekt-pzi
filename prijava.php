<?php 
    include('server.php');
?>
<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        
        <title>Naslov | Prijava|</title>
        <link rel="stylesheet" href="login.css" type="text/css">
        
    </head>
    <body>  
       <header>
            <div class="loginbox">
                <img src="avatar.png" class="avatar">
                    <h1>Prijavi se ovdje</h1>
                    <form method="POST" action="prijava.php">
                        <?php include("errors.php") ; //prikaz errora   ?>
                        <p>Korisnicko ime</p>
                        <input type="text" name="username" placeholder="Korisnicko Ime" >
                        <p>Lozinka</p>
                        <input type="password" name="password" placeholder="Lozinka" >
                        <input type="submit" name="prijava" value="Prijavi se" >
                        <div>

                        </div>
                        <a href="#">Zaboravili ste lozinku |</a>
                        <a href="index.php">| Nastavite kao gost</a>
                    </form>
            
            </div>
        </header>
    </body>
</html>