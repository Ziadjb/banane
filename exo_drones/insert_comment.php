<?php

include_once('pdo.inc.php');

$_POST = [
	"prenom" => "Clitorine",
	"email" => "clitorine@gmail.com",
	"commentaire" => "Un super commentaire de Clitorine :)",
	"date" => date('Y:m:d H:i:s')
];

if(isset($_POST) && !empty($_POST['prenom'])) {
	try {
		$sql = "INSERT INTO commentaires(prenom, email, commentaire, date) VALUES (:prenom, :email, :commentaire, :date)";

		$query = $pdo->prepare($sql);

		$query->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
		$query->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
		$query->bindValue(':commentaire', $_POST['commentaire'], PDO::PARAM_STR);
		$query->bindValue(':date', $_POST['date'], PDO::PARAM_STR);

		$query->execute();
	} catch(Exception $e) {
		die('Erreur SQL ' . $e->getMessage());
	}
}
