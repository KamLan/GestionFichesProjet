<?php
include 'bdd.php';
$ficheid = $_GET['id'];
$email_pil="";

    $req_mail = $bdd->query('SELECT commentaire_fiche FROM fiches WHERE id_fiche="'.$ficheid.'"');
    while ($donnees4 = $req_mail->fetch())
    {
      $email_pil=$_donnees4['email_pil'];
      $nom_pil=$_donnees4['nom_pil'];
      $tel_pil=$_donnees4['tel_pil'];
      $titre_proj=$_donnees4['titre_proj'];

      $to = $email_pil;
      $subject = 'Un commentaire a été ajouté sur votre projet!';
      $headers = 'Content-Type: text/html; charset=\"iso-8859-1\"';
      $message = '<p> Bonjour ! <p>';
      $message .= '<p> un nouveau commentaire a été ajouté sur votre projet: </p>';
      $message .= '<p>'.$titre_proj.'</p>';

      mail($to, $subject, $message, $headers);
    }
    $req_mail->closeCursor();

      $to3 = 'adouardcamille@hotmail.com';
      $subject3 = 'Hello';
      $message3 = 'testytest';

      mail($to3, $subject3, $message3);

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
