<?php 
	$productArray = require_once $_SERVER['DOCUMENT_ROOT'].'/data/products.php';
	$userArray = require_once $_SERVER['DOCUMENT_ROOT'].'/data/users.php';
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Let's Shop !</title>
</head>
<body>

	<h1>Venez Acheter chez nous, c'est presque gratuit !</h1>

	<form action="/shopping.php" method="POST">
		<select name="client" id="client">
		<?php foreach ($userArray as $key => $value) :?>
			<option value="<?= $value->getId() ?>"> <?= $value->getEmail() ?> </option>
		<?php endforeach ?>
		</select>

		<select name="product1" id="product1">
			<?php foreach ($productArray as $key => $value): ?>
			<option value="<?= $value->getId() ?>"> <?= $value->getName() ?> </option>
			<?php endforeach ?>
		</select>

		<select name="product1" id="product1">
			<?php foreach ($productArray as $key => $value): ?>
			<option value="<?= $value->getId() ?>"> <?= $value->getName() ?> </option>
			<?php endforeach ?>
		</select>

		<select name="product1" id="product1">
			<?php foreach ($productArray as $key => $value): ?>
			<option value="<?= $value->getId() ?>"> <?= $value->getName() ?> </option>
			<?php endforeach ?>
		</select>

		<button type="submit">Buy</button>
	</form>	
</body>
</html>