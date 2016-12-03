<?php
$id=$_GET['idb'];
$arr=unserialize($_COOKIE['basket']);
unset($arr[$id]);
$seri=serialize($arr);
setcookie("basket",$seri,0,"/");
header("Location: /index.php/?route=basket");
?>