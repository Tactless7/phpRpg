<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Validate Order</title>
	<link rel="stylesheet" href="../style.css">
</head>
<body>
	<h1>Order Validation</h1>

	<table>
		<tr>
			<th>Product Name</th>
			<th>Unit Price</th>
		</tr>
			<?php foreach ($userArray[$idClient]->getCart() as $key => $value): ?>
		<tr>
			<td><?= $value->getName()?></td>
			<td><?= $value->getPrice() ?></td>
		</tr>
			<?php endforeach ?>
	</table>

	<h3>Total Price : <?= $userArray[$idClient]->getBillAmount() ?> $</h3>
	
</body>
</html>