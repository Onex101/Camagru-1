<?php
if(!isset($_SESSION)) {session_start();}

require('config/database.php');

$username = $_GET['username'];
$activation_code = $_GET['activation_code'];

$query = $pdo->prepare("SELECT activated FROM camagru_db.users WHERE username = :usr AND activation_code = :con ");
$query->execute(["usr"=>$username , "con"=>$activation_code]);
$result = $query->fetch();

// $_SESSION['message'] = count($result);
if (count($result) == 1)
{
	$update_con = "UPDATE camagru_db.users SET activated='Y' WHERE username='$username' AND activation_code='$activation_code'";
	if ($pdo->exec($update_con))
	{
		$login_message = "Your account is active! You can now login!";
		$_SESSION['message'] = $login_message;
	}
	else
		$_SESSION['error'] = "Error Authenticating";
}
else
{
	$error = "Problem Authenticating";
	$_SESSION['error'] = $error;
}
header("Location: index.php?login='1'");
?>