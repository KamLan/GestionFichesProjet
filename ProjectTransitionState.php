<?php
include 'bdd.php';
$ficheid = $_GET['ficheid'];
$etatfiche = $_GET['etat'];


  if ($etatfiche == 'approved') {

    $req_ap = $bdd->prepare('UPDATE fiches SET validation_fiche = :validation WHERE id_fiche = :id');
    $req_ap->execute(array(
      'validation' => $etatfiche,
      'id' => $ficheid,
      ));

    header('location:index.php');
  }
  elseif ($etatfiche == 'denied') {

    $req_ap = $bdd->prepare('UPDATE fiches SET validation_fiche = :validation WHERE id_fiche = :id');
    $req_ap->execute(array(
      'validation' => $etatfiche,
      'id' => $ficheid,
      ));

    header('location:index.php');
  }
  else {

  }


 ?>
