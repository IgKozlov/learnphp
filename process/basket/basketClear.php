<?php
	$uns= unserialize($_COOKIE["basket"]);
	unset($uns);
	$ser = serialize($uns);
	setcookie("basket", $ser ,0,"/");
	
	header("Location: /index.php/?route=basket");


?>