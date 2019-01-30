<?php 
    session_start();    //pocetak sesije
    $username="";       //postavljanje varijabla
    $email="";
    $errors=array();    //postavljanje error niza

    $db = mysqli_connect("localhost","root","","baza") or die($db);
    //spajanje na bazu

    // ako je pritisnuto dugme registriraj se na stranici login.php

    if(isset($_POST['registracija'])){
        //postavljanje varijabla koje su unesene
        $username =mysqli_real_escape_string($db,$_POST["username"]);
        $email =mysqli_real_escape_string($db,$_POST["email"]);
        $password_1 =mysqli_real_escape_string($db,$_POST["password_1"]);
        $password_2 =mysqli_real_escape_string($db,$_POST["password_2"]);
        
        //provjera podataka ako je neko od polja prazno izbacuje gresku
        if(empty($username)){

            array_push($errors,"Username is required");//ispisuje grešku ako je neko polje prazno
        }
        if(empty($email)){

            array_push($errors,"Email is required");
        }
        if(empty($password_1)){

            array_push($errors,"Password is required");

        }
        //provjera da li su lozinke iste ako nisu ispisuje "The two passwords do not match"
        if($password_1!= $password_2){

            array_push($errors,"The two passwords do not match");
        }
        //ako nema nikakvi greski sprema korisnika u bazu
        if(count($errors)==0){
            $password = md5($password_1); //enkripcija lozinke zbog sigurnosti sprema je u bazu enkriptiranu a ne kao obicnu vrijednost
            $sql = "INSERT INTO korisnici (username,email,password) VALUES ('$username','$email','$password')";
            mysqli_query($db,$sql);
            $_SESSION["username"]=$username; //postavjanje varijable session username kao korisnicko ime koje je korisnik uzeo
            $_SESSION["success"]="You are now logged in";//postavlja success kao "You are now logged in"
            header("location:index.php"); //redirekt na index.php
        }

    }



    //logout 
    if(isset($_GET["logout"])){
        session_destroy(); //unistava sessiju
        unset($_SESSION["username"]); //brise varijablu sername 
        header("location:prijava.php");//redirekt na prijava.php
    }


    //login sa stranice prijava.php

    if(isset($_POST["prijava"])){
        $username = mysqli_real_escape_string($db,$_POST["username"]);
        $password = mysqli_real_escape_string($db,$_POST["password"]);
        
        //provjera podataka ako je neko od polja prazno izbacuje gresku
        if(empty($username)){

            array_push($errors,"Username is required");
        }
        if(empty($password)){

            array_push($errors,"Password is required");
        }

        if(count($errors)==0){
            $password=md5($password);
            $query="SELECT * FROM korisnici WHERE username='$username' AND password='$password'";//uzima iz baze podatke gdje su sername i password isti
            $result = mysqli_query($db,$query);//spremaju se u varijablu result
            if(mysqli_num_rows($result)==1){//ako je rezultat jednak jednom redu u tablici u bazi
                $_SESSION["username"]=$username;
                $_SESSION["success"]="You are now logged in";
                header("location:index.php");
            }
            else{
                array_push($errors, "wrong username/password combination");//inace vraca error "wrong username/password combination"
                
                 
            }
        }
    }
    
?>