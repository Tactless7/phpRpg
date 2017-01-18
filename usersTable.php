<?php $usersArray = require 'users.php';
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Users Table</title>
</head>
<body>
	
	<table>
		<tr>
			<th>Id</th>
			<th>Email</th>
			<th>Created At</th>
		</tr>
		<?php foreach ($usersArray as $key => $value) : ?>
		<tr>
			<td><?= $value->getId() ?></td>
			<td><?= $value->getEmail()?></td>
			<td><?= $value->getCreatedAt()?></td>
		</tr>
		<?php endforeach; ?>
	</table>

	
</body>
</html>