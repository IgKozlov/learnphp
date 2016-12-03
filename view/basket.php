<h1>Корзина</h1>
<?php
$basketGoods = unserialize($_COOKIE["basket"]);
 if (count($basketGoods)>=1){
 	foreach ($basketGoods as $key => $value) {
 		$id=$key;
 		$good=$goods[$id];
 		?>
 		<div>
	 		<div>
		 		<div>Наименование товара</div>
		 		<div><?=$good["nameGood"]["name"];?></div>
		 	</div>
		 	<div>
		 		<div>Цена</div>
		 		<div><?=$good["price"];?> грн.</div>
		 	</div>
		 	<div>
		 		<div>Количество</div>
		 		<span><a href="/process/basket/basketMinus.php?id=<?=$key?>">-</a></span>
		 		<span><?=$value?></span>
		 		<span><a href="/process/basket/basketAdd.php?id=<?=$key?>">+</a></span>
		 	</div>
		 	<div>
		 		<div>Сумма</div>
		 		<div><?=$good["price"]*$value;?> грн.</div>
		 	</div>
		 	<div>
		 		<div>Удалить товар</div>
		 		<div><a href="/process/basket/basketDel.php?idb=<?=$key?>">Х</a></div>
		 	</div>
		 	<? $allBasket=$allBasket+$good["price"]*$value;?>
		  </div>
		  <?}?>
		<div>ИТОГО: <?=$allBasket ?> грн.</div>
		<div><a href="/process/basket/basketClear.php">Очистить корзину</a></div>
	 	
	 <?} else {echo "Корзина пуста";}?>

	


