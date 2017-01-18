<?php $productArray = require 'products.php' ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Table</title>
</head>
<body>
	<?php var_dump($productArray) ?>
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
			<td><?= $value->getProductorName() ?></td>
			<td><?= $value->getHarvestedAt() ?></td>
			<td><?= $value->getBrand() ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
	
</body>
</html>