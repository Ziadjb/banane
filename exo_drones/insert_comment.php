<?php

include_once('pdo.inc.php');

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


/*
* Récupérer le dernier commentaire qui est dans le JSON que Céline m'envoie
* Comparer l'id dans le JSON à l'id en base
* S'il y a d'autres id commentaires supérieur à l'id envoyé alors on récupère ces commentaires et on les mets dans un Json.
*/