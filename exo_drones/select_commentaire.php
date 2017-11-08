<?php
include('pdo.inc.php');


$conn = $pdo;

$result = $conn->query("SELECT * FROM commentaires");

$outp = $result->fetchAll();

$commentairesJson = json_encode($outp);

//$jsonFinal = json_encode($outp);
?>