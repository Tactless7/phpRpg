<?php 

	require 'Client.php';

	$janeDoe = new Client('jane.doe@gmail.com', 1);
	$johnSmith = new Client ('john.smith@gmail.com', 2);

	$usersArray = [1 => $janeDoe, 2 => $johnSmith];