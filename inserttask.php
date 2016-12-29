<?php
include 'bdd.php';

/* Gestion checkboxes */
$checkboxe1 = "";
$checkboxe2 = "";
$checkboxe3 = "";
$checkboxe4 = "";
$checkboxe5 = "";
$sep= " ";
$day=date('Y-m-d');

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

  $checkboxes= $checkboxe1.$sep.$checkboxe2.$sep.$checkboxe3;
  $checkboxes2= $checkboxe4.$sep.$checkboxe5;

$req = $bdd->prepare('INSERT INTO fiches(titre_projet, date_demande_projet, pilote_nom_fiche, pilote_email_fiche, pilote_mobile_fiche, pilote_soc_fiche, prio_strat_fiche, bu_proj_fiche, nom_mem_fiche, contexte_proj_fiche, description_proj_fiche, objectif_proj_fiche, ciblage_ent_fiche, ciblage_cand_fiche, ciblage_int_fiche, benef_proj_fiche, gains_proj_fiche, perim_proj_fiche, date_deploi_fiche, facteur_succ_fiche, port_offre_fiche, lignem_fiche, pedagogie_fiche, rituel_fiche, rituely_fiche, ritueln_fiche, approp_fiche, mode_apropr_fiche, relprof_fiche, diffess_fiche, diffintra_fiche, diffdig_fiche, diffelse_fiche, syntheff_fiche, synthdiff_fiche, synthtime_fiche, synthimp_fiche, synthcrea_fiche, synthmotiv_fiche)
VALUES(:titre_proj, :date_demande_proj, :nom, :email, :tel, :soc, :prio_strat, :bu_proj, :nom_mem_fiche, :context_proj, :descri_proj, :obj_proj, :cibl_ent, :cibl_cand, :cibl_int, :benef_proj, :gain_proj, :perim_proj, :date_deploi, :facteur_succ, :port_offre, :lignem, :pedagogie, :rituel, :rituely, :ritueln, :approp, :mode_apropr, :relprof, :diffess, :diffintra, :diffdig, :diffelse, :syntheff, :synthdiff, :synthtime, :synthimp, :synthcrea, :synthmotiv)');
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
    'cibl_ent' => $_POST['cibl_ent'],
    'cibl_cand' => $_POST['cibl_cand'],
    'cibl_int' => $_POST['cibl_cli'],
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
    ));

header('location: index.php');

?>
