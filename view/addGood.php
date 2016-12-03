
<form enctype="multipart/form-data" action="addGoodInBase.php" method="POST">
	<table>
	<tr><td>Наименование товара</td><td><input type="text" name="productName"></td></tr>
	<tr><td>Ссылка на видео</td><td><input type="text" name="mediaLinkVideo"></td></tr>
	<tr><td>Демонстация товара</td><td><input type="text" name="mediaLinkVideo"></td></tr>
	<tr><td>Стикер</td><td><p><input type="radio" name="sticker" value="st1">Суперцена</p>
							<p><input type="radio" name="sticker" value="st2">Топ продаж</p>
							<p><input type="radio" name="sticker" value="st3">Акция</p></td></tr>
	</table>
	<input type="submit" value="Добавить товар">
</form>




