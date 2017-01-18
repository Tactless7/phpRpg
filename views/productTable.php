<?php $productArray = require_once $_SERVER['DOCUMENT_ROOT'].'/data/products.php' ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Table</title>
	<link rel="stylesheet" href="../style.css">
</head>
<body>
	<table>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Price</th>
			<th>ProductorName</th>
			<th>HarvestedAt</th>
			<th>Brand</th>
		</tr>
		<?php foreach ($productArray as $key => $value) : ?>
		<tr>
			<td><?= $value->getId() ?></td>
			<td><?= $value->getName()?></td>
			<td><?= $value->getPrice()?></td>
			<td><?= (method_exists($value, 'getProductorName')) ? $value->getProductorName() : null ?></td>
			<td><?= (method_exists($value, 'getHarvestedAt')) ? Date("Y-m-d H:i:s", $value->getHarvestedAt()) : null ?></td>
			<td><?= (method_exists($value, 'getBrand')) ? $value->getBrand() : null ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
	
</body>
</html>