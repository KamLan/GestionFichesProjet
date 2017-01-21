<?php
  include 'header.php';
  $fiche = $_GET['ficheid'];
 ?>

  <div class="container projects-main">
    <div class="col-md-12 main">
      <div class="col-md-3">
        <img class="brandlogo" src="img\adeccologo.png" alt="" />
      </div>
      <?php
       $reponse_id = $bdd->query('SELECT * FROM fiches WHERE id_fiche="'.$fiche.'"');

       while ($donnees2 = $reponse_id->fetch())
       {
     ?>
      <div class="col-md-9">
        <h1>
          <strong>
            Comité des offres <br>
          </strong>
          Fiche projet pour validation
        </h1>
      </div>
    </div>
    <div class="col-md-12 projects">
      <form class="mainform" name="formulaire" action="updateComments.php?id=<?php echo $fiche?>" method="post">
        <div class="col-md-12 centerit">
          <h1>
            <strong style="color:black;">
              <?php echo $donnees2['titre_projet'] ?>
            </strong>
            <?php
              switch ($donnees2['validation_fiche']) {
                case 'standby':
            ?>
                  <img src="img\standby.png" alt="" />
            <?php
                  break;
                case 'approved':
            ?>
                  <img src="img\approved.png" alt="" />
            <?php
                  break;
                case 'denied':
            ?>
                  <img src="img\denied.png" alt="" />
            <?php
                  break;
                default:
                  break;
              }
             ?>
          </h1>
          <h4>
            date demande :
            <strong>
              <?php
                echo $donnees2['date_demande_projet'];
             ?>
            </strong>
          </h4>
        </div>
        <div class="part1">
          <h2>
            1 Identification
            <div class="openclose">
              <img src="img/plus.png" alt="" id="affiche" />
              <img src="img/close.png" alt="" id="cache" />
            </div>
          </h2>
          <div class="col-md-12 blockform" id="1" style="background-color:#e6e6e6">
            <h3>
              Personne en charge du projet et de son implémentation
            </h3>
            <div class="col-md-12 pilote">
              <div class="col-md-6">
                <h4>
                  <strong>
                    <u>Nom Pilote</u> :
                    <?php echo $donnees2['pilote_nom_fiche']; ?>
                  </strong>
                </h4>
                <h4>
                  <u>Mail</u> :
                  <strong>
                    <?php echo $donnees2['pilote_email_fiche']; ?>
                  </strong>
                </h4>
                <h4>
                  <u>Téléphone</u> :
                  <strong>
                      <?php echo $donnees2['pilote_mobile_fiche']; ?>
                  </strong>
                </h4>
              </div>
              <div class="col-md-6">
                <h4>
                  <u>Société</u> :
                  <strong>
                      <?php echo $donnees2['pilote_soc_fiche']; ?>
                  </strong>
                </h4>
                <h4>
                  <u>Sponsor</u> :
                  <strong>
                      <?php echo $donnees2['nom_mem_fiche']; ?>
                  </strong>
                </h4>
                <h4>
                  <u>BU</u> :
                  <strong>
                      <?php echo $donnees2['bu_proj_fiche']; ?>
                  </strong>
                </h4>
              </div>
              <h4>
                <u>Priorité stratégique</u> :
                <strong>
                    <?php echo $donnees2['prio_strat_fiche']; ?>
                </strong>
              </h4>
            </div>
          </div>
        </div>
        <div class="part2">
          <h2>
            2 Description
            <div class="openclose">
              <img src="img/plus.png" alt="" id="affiche2" />
              <img src="img/close.png" alt="" id="cache2" />
            </div>
          </h2>
          <div class="col-md-12 blockform centerit" id="2" style="background-color:#ececec">
            <div class="col-md-12">
              <h3>
                Description
              </h3>
              <h4><u>Contexte :</u></h4>
              <h4>
                <strong>
                  <?php echo $donnees2['contexte_proj_fiche']; ?>
                </strong>
              </h4>
              <h4><u>Description :</u></h4>
              <h4>
                <strong>
                  <?php echo $donnees2['description_proj_fiche']; ?>
                </strong>
              </h4>
              <h4><u>objectifs :</u></h4>
              <h4>
                <strong>
                  <?php echo $donnees2['objectif_proj_fiche']; ?>
                </strong>
              </h4>
            </div>
            <div class="col-md-12 pilote">
              <h3>
                Ciblages
              </h3>
              <h4><u>Ciblage Entreprise</u></h4>
              <h4>
                <strong>
                  <?php echo $donnees2['ciblage_ent_fiche']; ?>
                </strong>
              </h4>
              <h4><u>Ciblage Candidat</u></h4>
              <h4>
                <strong>
                  <?php echo $donnees2['ciblage_cand_fiche']; ?>
                </strong>
              </h4>
              <h4><u>Ciblage Client</u></h4>
              <h4>
                <strong>
                  <?php echo $donnees2['ciblage_int_fiche']; ?>
                </strong>
              </h4>
            </div>
            <div class="col-md-12">
              <h4>
                <u>Bénéfices</u>
              </h3>
              <h4>
                <strong>
                  <?php echo $donnees2['benef_proj_fiche']; ?>
                </strong>
              </h4>
              <h4>
                <u>Gains</u>
              </h4>
              <h4>
                <strong>
                  <?php echo $donnees2['gains_proj_fiche']; ?>
                </strong>
              </h4>
              <h4>
                <u>Périmetre</u>
              </h4>
              <h4>
                <strong>
                  <?php echo $donnees2['perim_proj_fiche']; ?>
                </strong>
              </h4>
            </div>
          </div>
        </div>
        <div class="part3">
          <h2>
            3 Déploiement
            <div class="openclose">
              <img src="img/plus.png" alt="" id="affiche3" />
              <img src="img/close.png" alt="" id="cache3" />
            </div>
          </h2>
          <div class="col-md-12 blockform centerit" id="3" style="background-color:#f5f5f5">
            <div class="col-md-12 pilote">
              <h4>
                <u>Date envisagée de mise à disposition</u>
              </h4>
              <?php echo $donnees2['date_deploi_fiche']; ?>
            </div>
            <div class="col-md-12">
              <h4>
                <u>Ce qui paraît incontournable pour la réussite</u>
              </h4>
              <?php echo $donnees2['facteur_succ_fiche']; ?>
            </div>
            <div class="col-md-12">
              <h4>
                <u>Qui va porter cette offre au sein de nos réseaux</u>
              </h4>
              <?php echo $donnees2['port_offre_fiche']; ?>
            </div>
            <div class="col-md-4 pilote">
              <h3>
                Canal de déploiement
              </h3>
              <h4>
                <u>Ligne managériale : </u><br>
                <strong>
                  <?php echo $donnees2['lignem_fiche']; ?>
                </strong>
              </h4>
              <h4>
                <u>Pédagogie en réunion de zone :</u> <br>
                <strong>
                  <?php echo $donnees2['pedagogie_fiche']; ?>
                </strong>
              </h4>
              <h4>
                <u>Rituels existants : </u><br>
                <strong>
                  <?php echo $donnees2['rituel_fiche']; ?>
                </strong>
              </h4>
              <h4>
                <u>  Précisions : </u><br>
                <strong>
                  <?php
                    echo $donnees2['rituely_fiche'];
                    echo $donnees2['ritueln_fiche'];
                  ?>
                </strong>
              </h4>
            </div>
            <div class="col-md-4 pilote">
              <h3>
                Professionalisation
              </h3>
              <h4>
                <u>Appropriation à prévoir: </u><br>
                <strong>
                  <?php echo $donnees2['approp_fiche']; ?>
                  <?php echo $donnees2['mode_apropr_fiche']; ?>
                </strong>
              </h4>
              <h4>
                <u>Relais de professionalisation:</u> <br>
                <strong>
                  <?php echo $donnees2['relprof_fiche']; ?>
                </strong>
              </h4>
            </div>
            <div class="col-md-4 pilote">
              <h3>
                Diffusion des supports
              </h3>
              <h4>
                <u>Essentiel: </u><br>
                <strong>
                  <?php echo $donnees2['diffess_fiche']; ?>
                </strong>
              </h4>
              <h4>
                <u>Intranet BU : </u><br>
                <strong>
                  <?php echo $donnees2['diffintra_fiche']; ?>
                </strong>
              </h4>
              <h4>
                <u>Digital :</u> <br>
                <strong>
                  <?php echo $donnees2['diffdig_fiche']; ?>
                </strong>
              </h4>
              <h4>
                <u>Autre :</u> <br>
                <strong>
                  <?php echo $donnees2['diffelse_fiche']; ?>
                </strong>
              </h4>
            </div>
          </div>
        </div>
        <div class="part4">
          <h2>
            4 Synthèse : Votre vision du projet (1-faible, 5-important)
            <div class="openclose">
              <img src="img/plus.png" alt="" id="affiche4" />
              <img src="img/close.png" alt="" id="cache4" />
            </div>
          </h2>
          <div class="col-md-12 blockform centerit" id="4" style="background-color:#fdfdfd">
            <div class="col-md-2 mainotation">
              Note de l'effort d'implémentation <br>
              <div class="notationgrade">
                <strong>
                  <?php
                  switch ($donnees2['syntheff_fiche']) {
                    case '1':
                  ?>
                    <img src="img\level1.jpg" alt="" />
                  <?php
                      break;
                    case '2':
                  ?>
                    <img src="img\level2.jpg" alt="" />
                  <?php
                      break;
                    case '3':
                  ?>
                    <img src="img\level3.jpg" alt=""jpg
                  <?php
                      break;
                    case '4':
                  ?>
                    <img src="img\level4.jpg" alt="" />
                  <?php
                      break;
                    case '5':
                  ?>
                    <img src="img\level5.jpg" alt="" />
                  <?php
                      break;
                    default:
                      break;
                  }
                  ?>
                </strong>
              </div>
            </div>
            <div class="col-md-2 notation">
              Note de la différencation vs concurrence <br>
              <div class="notationgrade">
                <strong>
                  <?php
                  switch ($donnees2['synthdiff_fiche']) {
                    case '1':
                  ?>
                    <img src="img\level1.jpg" alt="" />
                  <?php
                      break;
                    case '2':
                  ?>
                    <img src="img\level2.jpg" alt="" />
                  <?php
                      break;
                    case '3':
                  ?>
                    <img src="img\level3.jpg" alt=""jpg
                  <?php
                      break;
                    case '4':
                  ?>
                    <img src="img\level4.jpg" alt="" />
                  <?php
                      break;
                    case '5':
                  ?>
                    <img src="img\level5.jpg" alt="" />
                  <?php
                      break;
                    default:
                      break;
                  }
                  ?>
                </strong>
              </div>
            </div>
            <div class="col-md-2 notation">
              Note du temps nécessaire déploiement <br>
              <div class="notationgrade">
                <strong>
                  <?php
                  switch ($donnees2['synthtime_fiche']) {
                    case '1':
                  ?>
                    <img src="img\level1.jpg" alt="" />
                  <?php
                      break;
                    case '2':
                  ?>
                    <img src="img\level2.jpg" alt="" />
                  <?php
                      break;
                    case '3':
                  ?>
                    <img src="img\level3.jpg" alt=""jpg
                  <?php
                      break;
                    case '4':
                  ?>
                    <img src="img\level4.jpg" alt="" />
                  <?php
                      break;
                    case '5':
                  ?>
                    <img src="img\level5.jpg" alt="" />
                  <?php
                      break;
                    default:
                      break;
                  }
                  ?>
                </strong>
              </div>
            </div>
            <div class="col-md-2 notation">
              Note de la facilité de mesure d'impact <br>
              <div class="notationgrade">
                <strong>
                  <?php
                  switch ($donnees2['synthimp_fiche']) {
                    case '1':
                  ?>
                    <img src="img\level1.jpg" alt="" />
                  <?php
                      break;
                    case '2':
                  ?>
                    <img src="img\level2.jpg" alt="" />
                  <?php
                      break;
                    case '3':
                  ?>
                    <img src="img\level3.jpg" alt=""jpg
                  <?php
                      break;
                    case '4':
                  ?>
                    <img src="img\level4.jpg" alt="" />
                  <?php
                      break;
                    case '5':
                  ?>
                    <img src="img\level5.jpg" alt="" />
                  <?php
                      break;
                    default:
                      break;
                  }
                  ?>
                </strong>
              </div>
            </div>
            <div class="col-md-2 notation">
              Note de la création de valeur / impact business <br>
              <div class="notationgrade">
                <strong>
                  <?php
                  switch ($donnees2['synthcrea_fiche']) {
                    case '1':
                  ?>
                    <img src="img\level1.jpg" alt="" />
                  <?php
                      break;
                    case '2':
                  ?>
                    <img src="img\level2.jpg" alt="" />
                  <?php
                      break;
                    case '3':
                  ?>
                    <img src="img\level3.jpg" alt=""jpg
                  <?php
                      break;
                    case '4':
                  ?>
                    <img src="img\level4.jpg" alt="" />
                  <?php
                      break;
                    case '5':
                  ?>
                    <img src="img\level5.jpg" alt="" />
                  <?php
                      break;
                    default:
                      break;
                  }
                  ?>
                </strong>
              </div>
            </div>
            <div class="col-md-6 motivation">
              <h4>
                <u>Motivations personnelles :</u>
              </h4> <br>
              <h4>
                <strong>
                  <?php echo $donnees2['synthmotiv_fiche']; ?>
                </strong>
              </h4>
            </div>
          </div> <br>
        </div>
        <div class="col-md-12 part5">
          <div class="col-md-12">
            <h3>
              Commentaires du Comité :
            </h3>
            <h4 style="text-align:center;">
              <strong>
                <?php echo $donnees2['commentaire_fiche']; ?>
              </strong>
            </h4>
          </div>
          <div class="col-md-4" style="margin-left:33%; margin-top:10%;">
            <label for="com-proj-fiche">Ajout de commentaire</label> <br>
            <textarea name="comm_proj" rows="8" cols="40" id="com-proj-fiche"></textarea>
            <input type="submit" name="name" value="Ajout du commentaire" style="width:250px;">
          </div>
          <div class="col-md-12">
            <div class="col-md-6 validate">
              <a href="ProjectTransitionState.php?ficheid=<?php echo $fiche ?>&amp;etat=approved">Valider le projet</a>
            </div>
            <div class="col-md-6 validate">
              <a href="ProjectTransitionState.php?ficheid=<?php echo $fiche ?>&amp;etat=denied">Rejeter le projet</a>
            </div>
          </div>
        </div>
      </form>
    </div>
      <?php
        }
        $reponse_id->closeCursor();
      ?>
    <script src="js/formScript.js"></script>
  </body>
</html>
