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

	if($productArray[$idProduct1]->isFresh() && $productArray[$idProduct2]->isFresh() && $productArray[$idProduct3]->isFresh()){
		require_once __DIR__.'/views/validateOrder.php';
	} else {
		require_once __DIR__.'/views/oldProduct.php';
