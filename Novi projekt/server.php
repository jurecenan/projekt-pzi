<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'projekt');

	// initialize variables
	$username = "";
	$email = "";
    $id = 0;
    $password = "";
	$update = false;

	if (isset($_POST['save'])) {
		$username = $_POST['username'];
        $email = $_POST['email'];
        $password =$_POST['password'];

		mysqli_query($db, "INSERT INTO korisnik (username, email, password, user_type) VALUES ('$username', '$email', '$password', 'user')"); 
		$_SESSION['message'] = "Korisnik uspjesno dodan"; 
		header('location: admin.php');
	}


	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

		mysqli_query($db, "UPDATE korisnik SET username='$username', email='$email' password='$password' WHERE id=$id");
		$_SESSION['message'] = "Uspjesne promjene o korisniku"; 
		header('location: admin.php');
	}

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM korisnik WHERE id=$id");
	$_SESSION['message'] = "Korisnik je izbrisan"; 
	header('location: admin.php');
}


	$results = mysqli_query($db, "SELECT * FROM korisnik");


?>