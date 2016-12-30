<?php
include 'bdd.php';
$ficheid = $_GET['ficheid'];
$approved = 'approved';
echo $ficheid;

$req_ap = $bdd->prepare('UPDATE fiches SET validation_fiche = :validation WHERE id_fiche = :id');
$req_ap->execute(array(
  'validation' => $approved,
  'id' => $ficheid,
  ));
header('location:index.php');

?>
