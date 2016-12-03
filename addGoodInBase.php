<?
echo "<pre>";
$goods=unserialize(file_get_contents("../db/goods.base"));
$good=[];

//-------------------------------------------------------------------------

$video=$_POST["mediaLinkVideo"];
if(iconv_strlen($video)!=0){	
	$good["mediaLinkVideo"]=$video;
}

//-------------------------------------------------------------------------
$_POST["mediaLinkDemo"]=isset($_POST["mediaLinkDemo"]) ? $_POST["mediaLinkDemo"] : '';
$demo=$_POST["mediaLinkDemo"];
if(iconv_strlen($video)!=0){	
	$good["mediaLinkDemo"]=$demo;
}

//-------------------------------------------------------------------------

$stiker=$_POST['stiker'];
switch ($stiker){
	case 'stik1':
		$good["sticker"]=["superPrice","Суперцена"];
		break;
	case 'stik2':
		$good["sticker"]=["topSales","Топ продаж"];
		break;
	case 'stik3':
		$good["sticker"]=["stock","Акция"];
		break;	
}

//-------------------------------------------------------------------------

$productName=$_POST['productName'];
$good["nameGood"]=["name"=>$productName];


$goods[]=$good;
file_put_contents("../db/goods.base",serialize($goods));



?>