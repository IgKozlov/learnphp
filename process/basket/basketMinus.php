<?php
	$id = $_GET["id"];
	
	$uns = unserialize($_COOKIE["basket"]);
	if($uns[$id]==false){
		$uns[$id]=0;
		} else{
		$uns[$id]=$uns[$id]-1;
		}
	$ser=serialize($uns);
	setcookie("basket", $ser ,0,"/");
	//var_dump($uns);
	header("Location: /index.php/?route=basket");

?>