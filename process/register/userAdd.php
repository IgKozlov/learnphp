<?php 
	session_start();
	include '../../functions/func.php';
	
	$arr=unserialize(file_get_contents("../../db/users.base"));

	if (!is_array($arr)){
		$arr = [];
	}

	$ip=$_SERVER['SERVER_ADDR'];
	$password=$_POST['passworduser'];
	$mail=$_POST['email'];
	$time=date('c');
	foreach ($arr as $key => $value) {
		if($value['email'] == $_POST['email']){
		echo 'Такой имейл уже существует';
		$reg = 1;
		break;
		}
	};
	//проверка
	if ($reg == !1){
		if (valemail($mail) == false){
			file_put_contents('../../log.php', $time." Не пройдена проверка Имейла(@mail) "."(".$mail.")"." IP ".$ip." HOST ".$host ,FILE_APPEND);
			header("Location: /index.php?route=register");
			} else if (valpassword($password) == false) {
		file_put_contents('../../log.php', $time." Не пройдена проверка Пароля "."(".$password.")"." IP ".$ip." HOST ".$host ,FILE_APPEND);
			header("Location: /index.php?route=register");
		} else {
			$pas= password_hash($password, PASSWORD_DEFAULT);
		$user['password'] = $pas;
		$user['iduser'] = count($arr);
		$user['email']=$_POST['email'];
			
		$arr[]=$user;
		$sss=serialize($arr);
		file_put_contents('../../db/users.base', $sss);

		$_SESSION['auth'] = true;
		$_SESSION['iduser'] = $user['iduser'];
		$_SESSION['name'] = $user['name'];
		header("Location: /index.php");
		}
	}
	
	var_dump($_SESSION);

	
 ?>		
