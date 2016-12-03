<?
	
	switch ($route) {
		case NULL:
			include_once 'view/main.php';
			break;
		case 'about':
			include_once 'view/about.php';
			break;
		case 'contacts':
			include_once 'view/contacts.php';
			break;
		case 'catalog':
			include_once 'view/catalog.php';
			break;
		case 'product':
			include_once 'view/product.php';
			break;
		case 'basket':
			include_once 'view/basket.php';
			break;
		case 'addGood':
			include_once 'view/addGood.php';
			break;
		case 'register':
			include_once 'view/register.php';
			break;
		default:
			include_once 'view/404.php';
			break;
	}
?>