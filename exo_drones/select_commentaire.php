<?php
header("Content-Type: application/json; charset=UTF-8");

$obj = json_decode($_GET["commentaires"], false);

$conn = 
$result = $conn->query("SELECT id , prenom , email , commentaire , date FROM ".$obj->table.);
$outp = array();
$outp = $result->fetch_all;

echo json_encode($outp);
?>