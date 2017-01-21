<?php
include 'bdd.php';
$ficheid = $_GET['id'];


    $req_ap = $bdd->query('SELECT commentaire_fiche FROM fiches WHERE id_fiche="'.$ficheid.'"');
    while ($donnees3 = $req_ap->fetch())
    {
      $commentaires=$donnees3['commentaire_fiche']." <br><br> ".$_POST['comm_proj'];
    }
    $req_ap->closeCursor();

    $req_ap2 = $bdd->prepare('UPDATE fiches SET commentaire_fiche = :comm_proj WHERE id_fiche = :id');
    $req_ap2->execute(array(
      'comm_proj' => $commentaires,
      'id' => $ficheid,
      ));

    header('location:index.php');

 ?>
