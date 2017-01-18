<?php require 'users.php';
print_r($usersArray) ?><!DOCTYPE html>
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
		<tr>
			<td><?= $janeDoe->getId() ?></td>
			<td><?= $janeDoe->getEmail()?></td>
			<td><?= $janeDoe->getCreatedAt()?></td>
		</tr>
		<tr>
			<td><?= $johnSmith->getId() ?></td>
			<td><?= $johnSmith->getEmail()?></td>
			<td><?= $johnSmith->getCreatedAt()?></td>
		</tr>
	</table>

	
</body>
</html>