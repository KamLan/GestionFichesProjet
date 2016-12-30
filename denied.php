<?php
include 'bdd.php';
$ficheid = $_GET['ficheid'];
$denied = 'denied';
echo $ficheid;

$req_ap = $bdd->prepare('UPDATE fiches SET validation_fiche = :validation WHERE id_fiche = :id');
$req_ap->execute(array(
  'validation' => $denied,
  'id' => $ficheid,
  ));
header('location:index.php');

?>
