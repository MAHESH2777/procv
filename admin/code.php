<?php 
session_start();

// ***************************************** //
// **********	DECLARE VARIABLES  ********** //
// ***************************************** //

$username = 'admin@scuti.com';
$password = 'scuti@321';

$random1 = 'secret_key1';
$random2 = 'secret_key2';

$hash = md5($random1.$password.$random2); 

$self = $_SERVER['REQUEST_URI'];


if (isset($_SESSION['login']) && $_SESSION['login'] == $hash) {
	header('Location: index.php');

	?>		
	<?php
}
else if (isset($_POST['submit'])) {

	if ($_POST['username'] == $username && $_POST['password'] == $password){
	
		//IF USERNAME AND PASSWORD ARE CORRECT SET THE LOG-IN SESSION
		$_SESSION["login"] = $hash;
		header("Location:index.php");
		
	} else {
		
		// DISPLAY FORM WITH ERROR
		$_SESSION['status'] = "Email or Password is invalid";
        header('Location: login.php');
		echo '<p>Username or password is invalid</p>';
		
	}
}	
?>