<?php

try
{
	$dns = 'mysql:host=localhost; dbname=drone';
	$utilisateur = 'root';
	$mdp = 'root';
	$options = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
	$pdo = new PDO($dns, $utilisateur, $mdp, $options);
}
catch(Exception $e)
{
	echo 'Problème: ' . $e->getMessage();
}