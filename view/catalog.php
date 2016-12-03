
<h2>Каталог</h2>
<?foreach ($goods as $id => $good) { ?>
		<a href="?route=product&id=<?=$id?>"><?=$good["nameGood"]["name"]?></a></br>
<?}?>
<h1><?=$good["nameGood"]["name"]?></h1>
	<div class="menu_top">
		<a href="#">Отзывы <?=$good["reviews"][1]?></a>
		<a href="?route=catalog">Вернуться назад</a>
	</div>
 <? foreach ($goods as $id => $good) {?> 

	<div class="good">
		<div class="demo">
			<?if ($good["mediaLinkVideo"]) {?>
				<a href="<?=$good["mediaLinkVideo"]?>">Видео</a>
			<?}?>
			<br>
			<?if ($good["mediaLinkDemo"]) {?>
				<a href="<?=$good["mediaLinkDemo"]?>">Демонстрация товара</a>
			<?}?>
		</div>
		<div class="sticker">
			<?if ($good["sticker"]) {?>
				<span class="<?=$good["sticker"][0]?>"><?=$good["sticker"][1]?></span>
			<?}?>
		</div>
		<div class="image"> 
			 <?if ($good["imgGood"]) {?>
				<img href="<?=$good["imgGood"][0]?>" src="images/product/<?=$good["imgGood"][1]?>" 
				alt="<?=$good["imgGood"][2]?>" title="<?=$good["imgGood"][3]?>">
			<?}?> 
		</div>
		<div class="nameGood">
			<?if ($good["nameGood"]) {?>
				<a href="<?=$good["nameGood"]["nameLink"]?>"><?=$good["nameGood"]["name"]?></a>
			<?}?>
		</div>
		<div class="endingGood">
			<?if ($good["endingGood"]) {?>
				<div class="endingGood_">Заканчивается!!!</div>
			<?}?>
		</div>
		<div class="oldprice">
			<?if ($good["oldPrice"]) {?>
				<div class="oldPrice_">Старая цена:<?=$good["oldPrice"]?></div>
			<?}?>
		</div>
		<div class="price">
			<?if ($good["price"]) {?>
				<div class="Price_">Ц е н а:<?=$good["price"]?></div>
			<?}?>
		</div>
		<div class="buybutton">
			<a href="process/basket/basketAdd.php?id=<?=$id?>"><img src="/static/img/buy.jpg" ></a>
		</div>
		<div class="raiting">
			<?if ($good["raiting"]) {?>
				<div class="raiting_">Рейтинг:<?=$good["raiting"]?> зведы</div>
			<?}?>
		</div>
		<div class="reviews">
			<?if ($good["reviews"]) {?>
				<div class="reviews">Просмотров:
				<a href="<?=$good["reviews"]["0"]?>"><?=$good["reviews"]["1"]?></a>
				</div>
			<?}?>
		</div>
		<div class="features"> 
			 <?if ($good["features"]) {?>
				<img src="images/feature/<?=$good["features"][0]?>">
				<img src="images/feature/<?=$good["features"][1]?>">
				<img src="images/feature/<?=$good["features"][2]?>">
				<img src="images/feature/<?=$good["features"][3]?>">
			<?}?> 
		</div>
		<div class="description">
			<?if ($good["description"]) {?>
				<div class="description_">Характеристики: </br><?=$good["description"]?></div>
			<?}?>
		</div>
	</div>

	
<?}?>
