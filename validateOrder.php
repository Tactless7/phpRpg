<?php
	$userArray = require_once __DIR__.'/data/users.php';
	$productArray = require_once __DIR__.'/data/products.php';

	$idClient = intval($_POST['client']);
	$idProduct1 = intval($_POST['product1']);
	$idProduct2 = intval($_POST['product2']);
	$idProduct3 = intval($_POST['product3']);

	$userArray[$idClient]->addProductToCart($productArray[$idProduct1]);
	$userArray[$idClient]->buy($productArray[$idProduct1]);

	$userArray[$idClient]->addProductToCart($productArray[$idProduct2]);
	$userArray[$idClient]->buy($productArray[$idProduct2]);

	$userArray[$idClient]->addProductToCart($productArray[$idProduct3]);
	$userArray[$idClient]->buy($productArray[$idProduct3]);

	$notFreshProducts = [];
	$clientCart = $userArray[$idClient]->getCart();
	foreach ($clientCart as $key => $value) {
		if(method_exists($value, 'isFresh') && !$value->isFresh()){
			array_push($notFreshProducts, $value);
		}
	}


	if($notFreshProducts){
		require_once __DIR__.'/views/oldProduct.php';
	} else {
		require_once __DIR__.'/views/validateOrder.php';
	}
