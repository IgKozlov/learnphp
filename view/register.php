<?php session_start();?>
	
 	<h3>Регистрация</h3>
		<form action="/process/register/userReg.php" method="post" enctype="multipart/form-data" >
			<p>Введите Ваш e-mail<br>
				<input name="email" size="32" type="text" placeholder="e-mail@mail.com" pattern="([a-z-0-9]{1,}\.){0,}[a-z-0-9]{1,}@[a-z0-9-]{1,}(\.[a-z0-9-]+){0,}\.[a-z]{2,6}"></p>
			<p>Пароль<br>
				<input name="passworduser" size="32" type="password"></p>
			<p><input type="submit" value="Зарегистрироваться"></p>
			
 		</form>
