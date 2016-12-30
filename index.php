
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
          <h3>Description :</h3>
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
        <div class="col-md-12">
          <div class="col-md-12">
            <h1>
              Déploiement
            </h1>
            <h3>Date envisagée de mise à disposition</h3>
            <h2>
              <strong>
                <?php echo $donnees['date_deploi_fiche']; ?>
              </strong>
            </h2>
            <h3>Ce qui paraît incontournable pour la réussite ?</h3>
            <h2>
              <strong>
                <?php echo $donnees['facteur_succ_fiche']; ?>
              </strong>
            </h2>
            <h3>Qui va porter cette offre au sein de nos réseaux</h3>
            <h2>
              <strong>
                <?php echo $donnees['port_offre_fiche']; ?>
              </strong>
            </h2>
          </div>
          <div class="col-md-12">
            <div class="col-md-4">
              <h3>Canal de déploiement</h3>
              <h2>
                Ligne managériale : <br>
                <strong>
                  <?php echo $donnees['lignem_fiche']; ?>
                </strong>
              </h2>
              <h2>
                Pédagogie en réunion de zone : <br>
                <strong>
                  <?php echo $donnees['pedagogie_fiche']; ?>
                </strong>
              </h2>
              <h2>
                Rituels existants : <br>
                <strong>
                  <?php echo $donnees['rituel_fiche']; ?>
                </strong>
              </h2>
              <h2>
                Précisions : <br>
                <strong>
                  <?php
                    echo $donnees['rituely_fiche'];
                    echo $donnees['ritueln_fiche'];
                  ?>
                </strong>
              </h2>
            </div>
            <div class="col-md-4">
              <h3>Professionalisation</h3>
              <h2>
                Appropriation à prévoir: <br>
                <strong>
                  <?php echo $donnees['approp_fiche']; ?>
                  <?php echo $donnees['mode_apropr_fiche']; ?>
                </strong>
              </h2>
              <h2>
                Relais de professionalisation: <br>
                <strong>
                  <?php echo $donnees['relprof_fiche']; ?>
                </strong>
              </h2>
            </div>
            <div class="col-md-4">
              <h3>Diffusion des supports</h3>
              <h2>
                Essentiel: <br>
                <strong>
                  <?php echo $donnees['diffess_fiche']; ?>
                </strong>
              </h2>
              <h2>
                Intranet BU : <br>
                <strong>
                  <?php echo $donnees['diffintra_fiche']; ?>
                </strong>
              </h2>
              <h2>
                Digital : <br>
                <strong>
                  <?php echo $donnees['diffdig_fiche']; ?>
                </strong>
              </h2>
              <h2>
                Autre : <br>
                <strong>
                  <?php echo $donnees['diffelse_fiche']; ?>
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
                switch ($donnees['syntheff_fiche']) {
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
                switch ($donnees['synthdiff_fiche']) {
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
                switch ($donnees['synthtime_fiche']) {
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
                switch ($donnees['synthimp_fiche']) {
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
                switch ($donnees['synthcrea_fiche']) {
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
                <?php echo $donnees['synthmotiv_fiche']; ?>
              </strong>
            </h2>
          </div>
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
