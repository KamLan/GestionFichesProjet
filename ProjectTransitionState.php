<?php
include 'bdd.php';
$ficheid = $_GET['ficheid'];
$etatfiche = $_GET['etat'];
$to = "";
$subject = "";
$headers = "";
$message = "";

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

  $req_mail = $bdd->query('SELECT * FROM fiches WHERE id_fiche="'.$ficheid.'"');
  while ($donnees4 = $req_mail->fetch())
  {
    $email_pil=$donnees4['pilote_email_fiche'];
    $nom_pil=$donnees4['pilote_nom_fiche'];
    $tel_pil=$donnees4['pilote_mobile_fiche'];
    $titre_proj=$donnees4['titre_projet'];

    $to = $email_pil;
    $subject .= 'Votre projet a changé de statut!';
    $headers .= 'Content-Type: text/html; charset=\"iso-8859-1\"';
    $headers .= 'From: "adouardcamille.com"';
    $headers .= 'Reply-To: adouardcamille@hotmail.com';
    $message .= '<h2> Bonjour !<h2>';
    $message .= '<h3> Le statut du projet ci-dessous a été modifié: </h3>';
    $message .= '<h4>'.$titre_proj.'</h4>';
    $message .= '<h3> Statut : </h3>';
    $message .= '<h4>'.$donnees4['validation_fiche'].'</h4>';
  }
  $req_mail->closeCursor();

  mail($to, $subject, $message, $headers);


 ?>
