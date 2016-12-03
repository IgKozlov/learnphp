<!DOCTYPE html>
<html>
<head>
	<title>Титульная страница</title>
	<link rel="stylesheet" type="text/css" href="/static/css/style.css">
</head>
<body>
	<header>
			<? if ($_COOKIE["username"] && $_COOKIE["Surname"]){
				echo "Hello ". $_COOKIE["username"]." ". $_COOKIE["Surname"];
				}else{
			?>
			<!-- <form action="process.php">
				<input type="text" name="usernameform"></br>
				<input type="text" name="Surnameform"></br>
				<input type="submit">
			</form> -->
			<?}?>
		<ul class="menu">
			<li><a href="/">Главная</a></li>
			<li><a href="/?route=about">О нас</a></li>
			<li><a href="/?route=contacts">Контакты</a></li>
			<li><a href="/?route=catalog">Каталог</a></li>
			<li><a href="/?route=basket">Корзина</a></li> 
			<li><a href="/?route=addGood">Добавить товар</a></li>
			<!-- <li><a href="/?route=register">Регистрация</a></li> --> 

		</ul>
		<div class="regest"><? include "/process/register/form.php" ?></div>
		<div class="break"></div>
	</header>
	<div>
		<div class="sidebar-left">
			<ul class="menu">
				<li><a href="/">Главная</a></li>
				<li><a href="/?route=about">О нас</a></li>
				<li><a href="/?route=contacts">Контакты</a></li>
				<li><a href="/?route=catalog">Каталог</a></li>
				<!-- <li><a href="/?route=basket">Корзина</a></li> -->
				<li><a href="/?route=addGood">Добавить товар</a></li>
				<!-- <li><a href="/?route=register">Регистрация</a></li> -->
			</ul>
		</div>
		<div class="contennt">
			<? include "route.php" ?>
		</div>
	</div>
</body>
</html>