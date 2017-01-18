<?php 

	require 'Vegetable.php';
	require 'Cloth.php';

	$banane = new Vegetable(1, 'Banane', 2, 'Banania', mktime(0, 0, 0, 1, 17, 2017));
	$poireau = new Vegetable(2, 'Poireau', 5, 'Poireaumania', mktime(0, 0, 0, 1, 18, 2017));

	$veste = new Cloth(3, 'Veste', 30, 'Umbro');
	$sac = new Cloth(4, 'Sac à Main', 55, 'EastPack');
	$jean = new Cloth(5, 'Jean Brut', 40, 'Levi\'s');

	return[1=> $banane, $poireau, $veste, $sac, $jean];