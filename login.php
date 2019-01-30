<?php 
    include('server.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        
        <title>Naslov | Registracija|</title>
        <link rel="stylesheet" href="login.css" type="text/css">
        
    </head>
    <body>  
       <header>
            <div class="loginbox">
                
                    <form method="POST" action="login.php">
                        <?php include("errors.php") ?>
                        <img src="avatar.png" class="avatar">
                        <p>Korisnicko ime</p>
                        <input type="text" name="username" placeholder="Korisnicko Ime" value="<?php echo $username;//ako je nesto krivo ispunjeno u registraciji onda ostavlja korisnicko ime i email koje je korisnik upiso ?>">
                        <p>Email adresa</p>
                        <input type="text" name="email" placeholder="Email" value="<?php echo $username; ?>" >
                        <p>Lozinka</p>
                        <input type="password" name="password_1" placeholder="Lozinka" >
                        <p>Potvrdite lozinku</p>
                        <input type="password" name="password_2" placeholder="Ponovljena lozinka" >
                        <input type="submit" name="registracija" value="Registriraj se" >
                        <a href="prijava.php">Vec imate korisnicki racun |</a>
                        <a href="index.php">| Nastavite kao gost</a>
                    </form>
            
            </div>
        </header>
    </body>
</html>