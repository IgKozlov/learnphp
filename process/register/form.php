<?
	if ($_SESSION['auth']) {?>
	<div>
		<div>
			<?;$name=$_SESSION['name'];
			echo "Здравствуй ". "<b>".$name."</b>";?>
		</div>
		<div>
			<?if($_SESSION['auth']){?>
			<a href="?route=profile">Профиль</a>
			<a href="/procces/deletecookie.php" class="a_exit">Выход</a>
			<?}?>
		</div>
	</div><?
	}else{
?>
<div>
	<form action="procces/processForm.php" >
		<div>
			<input type="text" name="userNameForm" required placeholder="Введите email" class="form_reg"  pattern="([a-z-0-9]{1,}\.){0,}[a-z-0-9]{1,}@[a-z0-9-]{1,}(\.[a-z0-9-]+){0,}\.[a-z]{2,6}"><br />

		</div>
		<div>
			<input type="password" name="userSecondNameForm" required placeholder="Введите пароль" class="form_reg" ><br />

		</div>

		<div>
			<input type="submit" value="Вход">
			<a href="/index.php?route=register">Регистрация</a>
		</div>
	
	</form>
</div>
<?}?>
