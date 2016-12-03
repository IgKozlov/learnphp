<?
	$username = trim(htmlspecialchars(strip_tags($_GET["usernameform"])));
	$Surname = trim(htmlspecialchars(strip_tags($_GET["Surnameform"])));

	setcookie("username", $username);
	setcookie("Surname", $Surname);

	header("Location: index.php");
	die();	
?>