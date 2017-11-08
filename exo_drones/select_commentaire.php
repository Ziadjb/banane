<?php
include('pdo.inc.php');
header("Content-Type: application/json; charset=UTF-8");

/*$_POST['prenom'] = 'Ibrahim';
$_POST['id'] = 'Ibrahim';
$_POST['commentaire'] = 'Ibrahim';*/

$conn = $pdo;
$result = $conn->query("SELECT * FROM commentaires");
$outp = array();
$outp = $result->fetch_all;

$jsonFinal = json_encode($outp);
?>