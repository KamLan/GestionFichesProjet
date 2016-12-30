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
        <div class="col-md-12">
          <div class="col-md-12">
            <h1>
              Déploiement
            </h1>
            <h3>Date envisagée de mise à disposition</h3>
            <h2>
              <strong>
                <?php echo $donnees2['date_deploi_fiche']; ?>
              </strong>
            </h2>
            <h3>Ce qui paraît incontournable pour la réussite ?</h3>
            <h2>
              <strong>
                <?php echo $donnees2['facteur_succ_fiche']; ?>
              </strong>
            </h2>
            <h3>Qui va porter cette offre au sein de nos réseaux</h3>
            <h2>
              <strong>
                <?php echo $donnees2['port_offre_fiche']; ?>
              </strong>
            </h2>
          </div>
          <div class="col-md-12">
            <div class="col-md-4">
              <h3>Canal de déploiement</h3>
              <h2>
                Ligne managériale : <br>
                <strong>
                  <?php echo $donnees2['lignem_fiche']; ?>
                </strong>
              </h2>
              <h2>
                Pédagogie en réunion de zone : <br>
                <strong>
                  <?php echo $donnees2['pedagogie_fiche']; ?>
                </strong>
              </h2>
              <h2>
                Rituels existants : <br>
                <strong>
                  <?php echo $donnees2['rituel_fiche']; ?>
                </strong>
              </h2>
              <h2>
                Précisions : <br>
                <strong>
                  <?php
                    echo $donnees2['rituely_fiche'];
                    echo $donnees2['ritueln_fiche'];
                  ?>
                </strong>
              </h2>
            </div>
            <div class="col-md-4">
              <h3>Professionalisation</h3>
              <h2>
                Appropriation à prévoir: <br>
                <strong>
                  <?php echo $donnees2['approp_fiche']; ?>
                  <?php echo $donnees2['mode_apropr_fiche']; ?>
                </strong>
              </h2>
              <h2>
                Relais de professionalisation: <br>
                <strong>
                  <?php echo $donnees2['relprof_fiche']; ?>
                </strong>
              </h2>
            </div>
            <div class="col-md-4">
              <h3>Diffusion des supports</h3>
              <h2>
                Essentiel: <br>
                <strong>
                  <?php echo $donnees2['diffess_fiche']; ?>
                </strong>
              </h2>
              <h2>
                Intranet BU : <br>
                <strong>
                  <?php echo $donnees2['diffintra_fiche']; ?>
                </strong>
              </h2>
              <h2>
                Digital : <br>
                <strong>
                  <?php echo $donnees2['diffdig_fiche']; ?>
                </strong>
              </h2>
              <h2>
                Autre : <br>
                <strong>
                  <?php echo $donnees2['diffelse_fiche']; ?>
                </strong>
              </h2>
            </div>
          </div>
          <div class="col-md-12">
            <h1>
              Synthèse
            </h1>
            <h2>
              Effort d'implémentation :
              <strong>
                <?php
                switch ($donnees2['syntheff_fiche']) {
                  case '1':
                ?>
                  <img src="img\level1.png" alt="" />
                <?php
                    break;
                  case '2':
                ?>
                  <img src="img\level2.png" alt="" />
                <?php
                    break;
                  case '3':
                ?>
                  <img src="img\level3.png" alt="" />
                <?php
                    break;
                  case '4':
                ?>
                  <img src="img\level4.png" alt="" />
                <?php
                    break;
                  case '5':
                ?>
                  <img src="img\level5.png" alt="" />
                <?php
                    break;
                  default:
                    break;
                }
                ?>
              </strong>
            </h2>
            <h2>
              Différenciation vs concurrence :
              <strong>
                <?php
                switch ($donnees2['synthdiff_fiche']) {
                  case '1':
                ?>
                  <img src="img\level1.png" alt="" />
                <?php
                    break;
                  case '2':
                ?>
                  <img src="img\level2.png" alt="" />
                <?php
                    break;
                  case '3':
                ?>
                  <img src="img\level3.png" alt="" />
                <?php
                    break;
                  case '4':
                ?>
                  <img src="img\level4.png" alt="" />
                <?php
                    break;
                  case '5':
                ?>
                  <img src="img\level5.png" alt="" />
                <?php
                    break;
                  default:
                    break;
                }
                ?>
              </strong>
            </h2>
            <h2>
              temps nécessaire déploiement :
              <strong>
                <?php
                switch ($donnees2['synthtime_fiche']) {
                  case '1':
                ?>
                  <img src="img\level1.png" alt="" />
                <?php
                    break;
                  case '2':
                ?>
                  <img src="img\level2.png" alt="" />
                <?php
                    break;
                  case '3':
                ?>
                  <img src="img\level3.png" alt="" />
                <?php
                    break;
                  case '4':
                ?>
                  <img src="img\level4.png" alt="" />
                <?php
                    break;
                  case '5':
                ?>
                  <img src="img\level5.png" alt="" />
                <?php
                    break;
                  default:
                    break;
                }
                ?>
              </strong>
            </h2>
            <h2>
              Facilité de mesure d'impact :
              <strong>
                <?php
                switch ($donnees2['synthimp_fiche']) {
                  case '1':
                ?>
                  <img src="img\level1.png" alt="" />
                <?php
                    break;
                  case '2':
                ?>
                  <img src="img\level2.png" alt="" />
                <?php
                    break;
                  case '3':
                ?>
                  <img src="img\level3.png" alt="" />
                <?php
                    break;
                  case '4':
                ?>
                  <img src="img\level4.png" alt="" />
                <?php
                    break;
                  case '5':
                ?>
                  <img src="img\level5.png" alt="" />
                <?php
                    break;
                  default:
                    break;
                }
                ?>
              </strong>
            </h2>
            <h2>
              Impact business :
              <strong>
                <?php
                switch ($donnees2['synthcrea_fiche']) {
                  case '1':
                ?>
                  <img src="img\level1.png" alt="" />
                <?php
                    break;
                  case '2':
                ?>
                  <img src="img\level2.png" alt="" />
                <?php
                    break;
                  case '3':
                ?>
                  <img src="img\level3.png" alt="" />
                <?php
                    break;
                  case '4':
                ?>
                  <img src="img\level4.png" alt="" />
                <?php
                    break;
                  case '5':
                ?>
                  <img src="img\level5.png" alt="" />
                <?php
                    break;
                  default:
                    break;
                }
                ?>
              </strong>
            </h2>
            <h2>
              Motivations personnelles : <br>
              <strong>
                <?php echo $donnees2['synthmotiv_fiche']; ?>
              </strong>
            </h2>
          </div>
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
