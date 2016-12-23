<?php
  include 'header.php';
 ?>

  <div class="container">
    <div class="col-md-12">
      <h1>
        <strong>
          FICHE PROJET POUR VALIDATION
        </strong>
      </h1>
    </div>
    <div class="col-md-12">
      <form class="" action="inserttask.php" method="post">
        <h3>
          Projet
        </h3>
        <input type="text" name="titre_proj" placeholder="Titre projet" value=""> <br>
        <input type="date" name="date_proj" value="">
        <h3>
          Pilote de l'action
        </h3>
        <input type="text" name="nom_pil" placeholder="Nom" value=""> <br>
        <input type="email" name="email_pil" placeholder="Email" value=""> <br>
        <input type="text" name="tel_pil" placeholder="Tel Protable" value=""> <br>
        <input type="text" name="soc_pil" placeholder="Societe" value=""> <br>
        <h3>
          Priorité stratégique
        </h3>
        <input type="checkbox" name="couv_emp" value=""> Couvrir toutes les formes d'emploi
        <input type="checkbox" name="acc_transf" value=""> Accompagner la transformation des compétences
        <input type="checkbox" name="new_digit" value=""> Proposer de nouvelles solutions digitales
        <h3>
          Entité / Societé
        </h3>
        <input type="text" name="bu_proj" placeholder="BU" value="">
        <h3>
          Membre codir ou manager
        </h3>
        <input type="text" name="name_mem" placeholder="nom" value="">
        <h3>
          Description
        </h3>
        <textarea name="contexte_proj" rows="8" cols="40" placeholder="Pourquoi ce projet ? Comment est-il né ?"></textarea> <br>
        <textarea name="descri_proj" rows="8" cols="40" placeholder="Décrire l'action / le projet - ce qui doit être fait"></textarea> <br>
        <textarea name="obj_proj" rows="8" cols="40" placeholder="indiquer les objectif visés - quoi, combien, pour quand"></textarea><br><br>
        Ciblage entreprise : <select class="" name="cibl_ent">
          <option> Small
          <option> Medium
          <option> Large
        </select>
        Ciblage candidats : <select class="" name="cibl_cand">
          <option> General Staffing
          <option> Professional Staffing
          <option> Tous profils
        </select>
        Ciblage interlocuteurs clients : <select class="" name="cibl_cli">
          <option> DRH
          <option> Acheteurs
          <option> Finance
          <option> Producteurs
          <option> Autres
        </select> <br><br>
        <textarea name="benef_proj" rows="8" cols="40" placeholder="Descriptif qualitatif des bénéfices attendus, retombées, ..."></textarea> <br>
        <textarea name="gain_proj" rows="8" cols="40" placeholder="Gains chiffrés attendus si quantifiables, hains qualitatifs explicités - Indicateurs objectif de suivi proposés (obligatoire) et comment les suivre (outil)"></textarea> <br>
        <textarea name="perim_proj" rows="8" cols="40" placeholder="Quelles sont les entités / directions concernées par l'action ou le projet"></textarea> <br>
        <input type="submit" name="name" value="Valider">
      </form>
    </div>

  </body>
</html>
