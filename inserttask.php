<?php
include 'bdd.php';

/* Gestion checkboxes */
$checkboxe1 = "";
$checkboxe2 = "";
$checkboxe3 = "";
$sep= " ";

if (isset($_POST['couv_emp'])) {
    $checkboxe1 = "Couvrir toutes les formes d'emploi";
}
if (isset($_POST['acc_transf'])) {
    $checkboxe2 = "Accompagner la transformation des compétences";
}
if (isset($_POST['new_digit'])) {
    $checkboxe3 = "Proposer de nouvelles solutions digitales";
}

  $checkboxes= $checkboxe1.$sep.$checkboxe2.$sep.$checkboxe3;

$req = $bdd->prepare('INSERT INTO fiches(titre_projet, date_demande_projet, pilote_nom_fiche, pilote_email_fiche, pilote_mobile_fiche, pilote_soc_fiche, prio_strat_fiche, bu_proj_fiche, nom_mem_fiche, contexte_proj_fiche, description_proj_fiche, objectif_proj_fiche, ciblage_ent_fiche, ciblage_cand_fiche, ciblage_int_fiche, benef_proj_fiche, gains_proj_fiche, perim_proj_fiche) VALUES(:titre_proj, :date_demande_proj, :nom, :email, :tel, :soc, :prio_strat, :bu_proj, :nom_mem_fiche, :context_proj, :descri_proj, :obj_proj, :cibl_ent, :cibl_cand, :cibl_int, :benef_proj, :gain_proj, :perim_proj)');
$req->execute(array(
    'titre_proj' => $_POST['titre_proj'],
    'date_demande_proj' => $_POST['date_proj'],
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
    'cibl_ent' => $_POST['cibl_ent'],
    'cibl_cand' => $_POST['cibl_cand'],
    'cibl_int' => $_POST['cibl_cli'],
    'benef_proj' => $_POST['benef_proj'],
    'gain_proj' => $_POST['gain_proj'],
    'perim_proj' => $_POST['perim_proj'],
    ));

header('location: index.php');

?>
