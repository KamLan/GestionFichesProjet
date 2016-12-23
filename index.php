
<?php
  include 'header.php';
 ?>
 <div class="container">
   <div class="col-md-12">
     <h1 class="main-title">
       <strong>
         Fiches Projets:
       </strong>
     </h1>
   </div>
   <div class="cold-md-12 tasklist">
     <?php
      $reponse_taches = $bdd->query('SELECT * FROM fiches');

      while ($donnees = $reponse_taches->fetch())
      {
    ?>
      <div class="col-md-6 task">
        <h1>
          <strong>
            <a href="fiche.php?ficheid=<?php echo $donnees['id_fiche'] ?>">
              Projet :
              <?php echo $donnees['titre_projet'] ?>
            </a>
          </strong>
        </h1>
        <h2>
          <strong>
            Date Ajout :
            <?php echo $donnees['date_demande_projet'] ?>
          </strong>
        </h2>
        <div class="col-md-12">
          <h1>
            Description pilote
          </h1>
          <h2>
            <strong>
              <?php echo $donnees['pilote_nom_fiche']; ?>
            </strong>
          </h2>
          <h2>
            <strong>
              <?php echo $donnees['pilote_email_fiche']; ?>
            </strong>
          </h2>
          <h2>
            <strong>
                <?php echo $donnees['pilote_mobile_fiche']; ?>
            </strong>
          </h2>
          <h2>
            <strong>
                <?php echo $donnees['pilote_soc_fiche']; ?>
            </strong>
          </h2>
        </div>
        <div class="col-md-12">
          <h1>
            Priorité stratégique
          </h1>
          <h2>
            <strong>
              <?php echo $donnees['prio_strat_fiche']; ?>
            </strong>
          </h2>
        </div>
        <div class="col-md-6">
          <h1>
            Entité/Société
          </h1>
          <h2>
            <strong>
              <?php echo $donnees['bu_proj_fiche']; ?>
            </strong>
          </h2>
        </div>
        <div class="col-md-6">
          <h1>
            Membre CODIR ou Manager
          </h1>
          <h2>
            <strong>
              <?php echo $donnees['nom_mem_fiche']; ?>
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
              <?php echo $donnees['contexte_proj_fiche']; ?>
            </strong>
          </h2>
          <h3>Deescription :</h3>
          <h2>
            <strong>
              <?php echo $donnees['description_proj_fiche']; ?>
            </strong>
          </h2>
          <h3>objectifs :</h3>
          <h2>
            <strong>
              <?php echo $donnees['objectif_proj_fiche']; ?>
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
              <?php echo $donnees['ciblage_ent_fiche']; ?>
            </strong>
          </h2>
          <h3>Ciblage Candidat</h3>
          <h2>
            <strong>
              <?php echo $donnees['ciblage_cand_fiche']; ?>
            </strong>
          </h2>
          <h3>Ciblage Client</h3>
          <h2>
            <strong>
              <?php echo $donnees['ciblage_int_fiche']; ?>
            </strong>
          </h2>
        </div>
        <div class="col-md-12">
          <h3>
            Bénéfices
          </h3>
          <h2>
            <strong>
              <?php echo $donnees['benef_proj_fiche']; ?>
            </strong>
          </h2>
          <h3>
            Gains
          </h3>
          <h2>
            <strong>
              <?php echo $donnees['gains_proj_fiche']; ?>
            </strong>
          </h2>
          <h3>
            Périmetre
          </h3>
          <h2>
            <strong>
              <?php echo $donnees['perim_proj_fiche']; ?>
            </strong>
          </h2>
        </div>
      </div>
    <?php
      }
      $reponse_taches->closeCursor();
      ?>
   </div>
 </div>

  </body>
</html>
