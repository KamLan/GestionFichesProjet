<?php
include 'bdd.php';

/* Gestion checkboxes */
$checkboxe1 = "";
$checkboxe2 = "";
$checkboxe3 = "";
$checkboxe4 = "";
$checkboxe5 = "";
$checkboxe6 = "";
$checkboxe7 = "";
$checkboxe8 = "";
$checkboxe9 = "";
$checkboxe10 = "";
$checkboxe11 = "";
$checkboxe12 = "";
$checkboxe13 = "";
$checkboxe14 = "";
$checkboxe15 = "";

$sep= " ";
$day=date('Y-m-d');
$etatvalidation = "standby";

if (isset($_POST['couv_emp'])) {
    $checkboxe1 = "Couvrir toutes les formes d'emploi";
}
if (isset($_POST['acc_transf'])) {
    $checkboxe2 = "Accompagner la transformation des compétences";
}
if (isset($_POST['new_digit'])) {
    $checkboxe3 = "Proposer de nouvelles solutions digitales";
}
if (isset($_POST['dig_si'])) {
  $checkboxe4 = "Site internet BU";
}
if (isset($_POST['dig_rs'])) {
  $checkboxe5 = "Réseaux sociaux BU";
}
if (isset($_POST['cible_e_s'])) {
  $checkboxe6 = "Small";
}
if (isset($_POST['cible_e_m'])) {
  $checkboxe7 = "Médium";
}
if (isset($_POST['cible_e_l'])) {
  $checkboxe8 = "Large";
}
if (isset($_POST['cible_c_1'])) {
  $checkboxe9 = "General Staffing";
}
if (isset($_POST['cible_c_2'])) {
  $checkboxe10 = "Professional Staffing";
}
if (isset($_POST['cible_c_3'])) {
  $checkboxe11 = "Tous profils";
}
if (isset($_POST['cible_i_1'])) {
  $checkboxe12 = "DRH";
}
if (isset($_POST['cible_i_2'])) {
  $checkboxe13 = "Acheteurs";
}
if (isset($_POST['cible_i_3'])) {
  $checkboxe14 = "Finance";
}
if (isset($_POST['cible_i_4'])) {
  $checkboxe15 = "Autres";
}
  $comments= "";
  $checkboxes= $checkboxe1.$sep.$checkboxe2.$sep.$checkboxe3;
  $checkboxes2= $checkboxe4.$sep.$checkboxe5;
  $checkboxes3 = $checkboxe6.$sep.$checkboxe7.$sep.$checkboxe8;
  $checkboxes4 = $checkboxe9.$sep.$checkboxe10.$sep.$checkboxe11;
  $checkboxes5 = $checkboxe12.$sep.$checkboxe13.$sep.$checkboxe14.$sep.$checkboxe15;

//Partie envoie de mails

  //recupération infos pour mail:

    $email_pil=$_POST['email_pil'];
    $nom_pil=$_POST['nom_pil'];
    $tel_pil=$_POST['tel_pil'];
    $titre_proj=$_POST['titre_proj'];


     $to = 'adouardcamille@hotmail.com';
     $subject = 'Un nouveau projet est disponible!';
     //$headers = "From: adouardcamille@hotmail.com";
     $headers = 'Content-Type: text/html; charset=\"iso-8859-1\"';

     $message = ' <html> <head> <title>Un nouveau projet est disponible !</title> </head>';
     $message .= ' <body> <p> Ce projet a été ajouté le '.$day.' </p>';
     $message .= ' <p>Voici les informations du projet créer: </p>';
     $message .= ' <p> titre du projet: '.$titre_proj.' </p>';
     $message .= ' <p> Nom du pilote: '.$nom_pil.' </p>';
     $message .= ' <p> Email du pilote: '.$email_pil.' </p>';
     $message .= ' <p> Téléphone du pilote: '.$tel_pil.' </p> </body> </html>';

     mail($to, $subject, $message, $headers);

    //mail pour la personne ayant ajouté le projet

    $to2 = $email_pil;
    $subject2 =  'Nous avons bien enregistrer votre projet !';
    //$headers = "From: adouardcamille@hotmail.com";
    $headers = 'Content-Type: text/html; charset=\"iso-8859-1\"';

    $message2 =  '<html> <head> <title>Votre projet a bien été ajouté !</title> </head>';
    $message2 .= '<body> <p> Ce projet a été ajouté le '.$day.'</p>';
    $message2 .= '<p> Voici le résumé de vos informations de contact: </p> ';
    $message2 .= '<p>titre du projet: '.$titre_proj.' </p>';
    $message2 .= '<p> Votre nom: '.$nom_pil.' </p>';
    $message2 .= '<p> Votre adresse mail: '.$email_pil.' </p>';
    $message2 .= '<p> Votre téléphone: '.$tel_pil.' </p> </body> </html>';

    mail($to2, $subject2, $message2, $headers);

$req = $bdd->prepare('INSERT INTO fiches(titre_projet, date_demande_projet, pilote_nom_fiche, pilote_email_fiche, pilote_mobile_fiche, pilote_soc_fiche, prio_strat_fiche, bu_proj_fiche, nom_mem_fiche, contexte_proj_fiche, description_proj_fiche, objectif_proj_fiche, ciblage_ent_fiche, ciblage_cand_fiche, ciblage_int_fiche, ciblage_cli_text_fiche, benef_proj_fiche, gains_proj_fiche, perim_proj_fiche, date_deploi_fiche, facteur_succ_fiche, port_offre_fiche, lignem_fiche, pedagogie_fiche, rituel_fiche, rituely_fiche, ritueln_fiche, approp_fiche, mode_apropr_fiche, relprof_fiche, diffess_fiche, diffintra_fiche, diffdig_fiche, diffelse_fiche, syntheff_fiche, synthdiff_fiche, synthtime_fiche, synthimp_fiche, synthcrea_fiche, synthmotiv_fiche, validation_fiche, commentaire_fiche)
VALUES(:titre_proj, :date_demande_proj, :nom, :email, :tel, :soc, :prio_strat, :bu_proj, :nom_mem_fiche, :context_proj, :descri_proj, :obj_proj, :cibl_ent, :cibl_cand, :cibl_int, :cibl_int_text, :benef_proj, :gain_proj, :perim_proj, :date_deploi, :facteur_succ, :port_offre, :lignem, :pedagogie, :rituel, :rituely, :ritueln, :approp, :mode_apropr, :relprof, :diffess, :diffintra, :diffdig, :diffelse, :syntheff, :synthdiff, :synthtime, :synthimp, :synthcrea, :synthmotiv, :validation, :comm_proj)');
$req->execute(array(
    'titre_proj' => $_POST['titre_proj'],
    'date_demande_proj' => $day,
    'nom' => $_POST['nom_pil'],
    'email' => $_POST['email_pil'],
    'tel' => $_POST['tel_pil'],
    'soc' => $_POST['soc_pil'],
    'prio_strat' => $checkboxes,
    'bu_proj' => $_POST['bu_proj'],
    'nom_mem_fiche' => $_POST['name_mem'],
    'context_proj' => $_POST['contexte_proj'],
    'descri_proj' => $_POST['descri_proj'],
    'obj_proj' => $_POST['obj_proj'],
    'cibl_ent' => $checkboxes3,
    'cibl_cand' => $checkboxes4,
    'cibl_int' => $checkboxes5,
    'cibl_int_text' => $_POST['autrecible'],
    'benef_proj' => $_POST['benef_proj'],
    'gain_proj' => $_POST['gain_proj'],
    'perim_proj' => $_POST['perim_proj'],
    'date_deploi' => $_POST['date_dispodeploi'],
    'facteur_succ' => $_POST['facteur_succ'],
    'port_offre' => $_POST['port_offre'],
    'lignem' => $_POST['lm'],
    'pedagogie' => $_POST['Peda'],
    'rituel' => $_POST['Rituel'],
    'rituely' => $_POST['R_y_text'],
    'ritueln' => $_POST['R_n_text'],
    'approp' => $_POST['Aprop'],
    'mode_apropr' => $_POST['A_ym_text'],
    'relprof' => $_POST['rel_prof'],
    'diffess' => $_POST['Ess'],
    'diffintra' => $_POST['Intra'],
    'diffdig' => $checkboxes2,
    'diffelse' => $_POST['autre_diff'],
    'syntheff' => $_POST['eff'],
    'synthdiff' => $_POST['diff'],
    'synthtime' => $_POST['time'],
    'synthimp' => $_POST['fac'],
    'synthcrea' => $_POST['crea'],
    'synthmotiv' => $_POST['motiv_perso'],
    'validation' => $etatvalidation,
    ':comm_proj' => $comments,
    ));

header('location: index.php');

?>
