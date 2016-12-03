<?php
	session_start();


	if($_COOKIE['basket']){}else{
		$prod=[];
		$p=serialize($prod);
		setcookie("basket",$p,0,'/');
		}
	$goods=unserialize(file_get_contents("db/goods.base"));
	


	$route = $_GET["route"];
	include_once "db/goods.base";
	include_once 'view/tamplate.tpl';
	

?>