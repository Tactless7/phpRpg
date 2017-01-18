<?php  
	require_once 'products.php';
	require_once 'users.php';
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<h1>Tests</h1>

	<h2>Achat d'une banane par Jane Doe</h2>
	<?php 
		$janeDoe->addProductToCart($banane);
		$janeDoe->buy($banane);
	?>

	<table>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Price</th>
			<th>ProductorName</th>
			<th>HarvestedAt</th>
			<th>Brand</th>
		</tr>
		<tr>
			<td><?= $banane->getId() ?></td>
			<td><?= $banane->getName()?></td>
			<td><?= $banane->getPrice()?></td>
			<td><?= (method_exists($banane, 'getProductorName')) ? $banane->getProductorName() : null ?></td>
			<td><?= (method_exists($banane, 'getHarvestedAt')) ? Date("Y-m-d H:i:s", $banane->getHarvestedAt()) : null ?></td>
			<td><?= (method_exists($banane, 'getBrand')) ? $banane->getBrand() : null ?></td>
		</tr>
	</table>

	<table>
		<tr>
			<th>Id</th>
			<th>Email</th>
			<th>Created At</th>
			<th>Cart</th>
			<th>BillAmount</th>
		</tr>
		<tr>
			<td><?= $janeDoe->getId() ?></td>
			<td><?= $janeDoe->getEmail() ?></td>
			<td><?= $janeDoe->getCreatedAt() ?></td>
			<td><ul><?= $janeDoe->displayCart() ?></ul></td>
			<td><?= $janeDoe->getBillAmount() ?></td>
		</tr>
	</table>

	<h3>Achat d'un légume et d'un vêtement par John Smith</h3>
	<?php 
		$johnSmith->addProductToCart($poireau);
		$johnSmith->buy($poireau);
		$johnSmith->addProductToCart($jean);
		$johnSmith->buy($jean);
	 ?>

	<table>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Price</th>
			<th>ProductorName</th>
			<th>HarvestedAt</th>
			<th>Brand</th>
		</tr>
		<?php foreach ($johnSmith->getCart() as $key => $value) : ?>
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

	<table>
		<tr>
			<th>Id</th>
			<th>Email</th>
			<th>Created At</th>
			<th>Cart</th>
			<th>BillAmount</th>
		</tr>
		<tr>
			<td><?= $johnSmith->getId() ?></td>
			<td><?= $johnSmith->getEmail() ?></td>
			<td><?= $johnSmith->getCreatedAt() ?></td>
			<td><ul><?= $johnSmith->displayCart() ?></ul></td>
			<td><?= $johnSmith->getBillAmount() ?></td>
		</tr>
	</table>
	
</body>
</html>
