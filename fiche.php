<?php
  include 'header.php';
  $fiche = $_GET['ficheid'];
 ?>

 <div class="container">
   <div class="col-md-12">
     <h1 class="main-title">
       <strong>
         Fiche Projet :
       </strong>
     </h1>
   </div>
   <div class="cold-md-12 tasklist">
     <?php
      $reponse_id = $bdd->query('SELECT * FROM fiches WHERE id_fiche="'.$fiche.'"');

      while ($donnees2 = $reponse_id->fetch())
      {
    ?>
      <div class="col-md-12 task">
        <h1>
          <strong>
            Projet :
            <?php echo $donnees2['titre_projet'] ?>
          </strong>
        </h1>
        <h2>
          <strong>
            Date Ajout :
            <?php echo $donnees2['date_demande_projet'] ?>
          </strong>
        </h2>
        <div class="col-md-12">
          <h1>
            Description pilote
          </h1>
          <h2>
            <strong>
              <?php echo $donnees2['pilote_nom_fiche']; ?>
            </strong>
          </h2>
          <h2>
            <strong>
              <?php echo $donnees2['pilote_email_fiche']; ?>
            </strong>
          </h2>
          <h2>
            <strong>
                <?php echo $donnees2['pilote_mobile_fiche']; ?>
            </strong>
          </h2>
          <h2>
            <strong>
                <?php echo $donnees2['pilote_soc_fiche']; ?>
            </strong>
          </h2>
        </div>
        <div class="col-md-12">
          <h1>
            Priorité stratégique
          </h1>
          <h2>
            <strong>
              <?php echo $donnees2['prio_strat_fiche']; ?>
            </strong>
          </h2>
        </div>
        <div class="col-md-6">
          <h1>
            Entité/Société
          </h1>
          <h2>
            <strong>
              <?php echo $donnees2['bu_proj_fiche']; ?>
            </strong>
          </h2>
        </div>
        <div class="col-md-6">
          <h1>
            Membre CODIR ou Manager
          </h1>
          <h2>
            <strong>
              <?php echo $donnees2['nom_mem_fiche']; ?>
            </strong>
          </h2>
        </div>
        <div class="col-md-12">
          <h1>
            Description
          </h1>
          <h3>Contexte :</h3>
          <h2>
            <strong>
              <?php echo $donnees2['contexte_proj_fiche']; ?>
            </strong>
          </h2>
          <h3>Deescription :</h3>
          <h2>
            <strong>
              <?php echo $donnees2['description_proj_fiche']; ?>
            </strong>
          </h2>
          <h3>objectifs :</h3>
          <h2>
            <strong>
              <?php echo $donnees2['objectif_proj_fiche']; ?>
            </strong>
          </h2>
        </div>
        <div class="col-md-12">
          <h1>
            Ciblages
          </h1>
          <h3>Ciblage Entreprise</h3>
          <h2>
            <strong>
              <?php echo $donnees2['ciblage_ent_fiche']; ?>
            </strong>
          </h2>
          <h3>Ciblage Candidat</h3>
          <h2>
            <strong>
              <?php echo $donnees2['ciblage_cand_fiche']; ?>
            </strong>
          </h2>
          <h3>Ciblage Client</h3>
          <h2>
            <strong>
              <?php echo $donnees2['ciblage_int_fiche']; ?>
            </strong>
          </h2>
        </div>
        <div class="col-md-12">
          <h3>
            Bénéfices
          </h3>
          <h2>
            <strong>
              <?php echo $donnees2['benef_proj_fiche']; ?>
            </strong>
          </h2>
          <h3>
            Gains
          </h3>
          <h2>
            <strong>
              <?php echo $donnees2['gains_proj_fiche']; ?>
            </strong>
          </h2>
          <h3>
            Périmetre
          </h3>
          <h2>
            <strong>
              <?php echo $donnees2['perim_proj_fiche']; ?>
            </strong>
          </h2>
        </div>
      </div>
    <?php
      }
      $reponse_id->closeCursor();
      ?>
   </div>
 </div>

  </body>
</html>
