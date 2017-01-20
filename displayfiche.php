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
      <form class="mainform" id="formproject" name="formulaire" action="inserttask.php" method="post">
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
          <!-- <input type="text" name="titre_proj" placeholder="Titre du projet" value="" style="margin-bottom:0px; margin-right:0px;"id="testinput" class="champ" > -->
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
          <div class="col-md-12 blockform" id="2" style="background-color:#ececec">
            <div class="col-md-12">
              <h3>
                Description
              </h3>
              <h4>Contexte :</h4>
              <h4>
                <strong>
                  <?php echo $donnees2['contexte_proj_fiche']; ?>
                </strong>
              </h4>
              <h4>Deescription :</h4>
              <h4>
                <strong>
                  <?php echo $donnees2['description_proj_fiche']; ?>
                </strong>
              </h4>
              <h4>objectifs :</h4>
              <h4>
                <strong>
                  <?php echo $donnees2['objectif_proj_fiche']; ?>
                </strong>
              </h4>
              <!-- <label for="ta1"><strong>Pourquoi ce projet? Comment</strong> est-il né?</label>
              <textarea name="contexte_proj" rows="4" cols="40" placeholder="Contexte" id="ta1" class="champ"></textarea> <br>
              <label for="ta2"><strong>Décrire l'action du projet.</strong> ce qui doit être fait</label>
              <textarea name="descri_proj" rows="4" cols="40" placeholder="Description" id=ta2 class="champ"></textarea> <br>
              <label for="ta3"><strong>Indiquer les objectifs visés.</strong> Quoi, combien...</label>
              <textarea name="obj_proj" rows="4 " cols="40" placeholder="Objectif" id="ta3" class="champ"></textarea><br><br> -->
            </div>
            <div class="col-md-12 pilote">
              <h3>
                Ciblages
              </h3>
              <h4>Ciblage Entreprise</h4>
              <h4>
                <strong>
                  <?php echo $donnees2['ciblage_ent_fiche']; ?>
                </strong>
              </h4>
              <h4>Ciblage Candidat</h4>
              <h4>
                <strong>
                  <?php echo $donnees2['ciblage_cand_fiche']; ?>
                </strong>
              </h4>
              <h4>Ciblage Client</h4>
              <h4>
                <strong>
                  <?php echo $donnees2['ciblage_int_fiche']; ?>
                </strong>
              </h4>
              <!-- <label for=""><strong class="undertitle"><u>Ciblage entreprise :</u></strong></label> <br>
              <input type="checkbox" name="cible_e_s" value="" id="cible_e_1" class="radiocheck" style="display:none">
              <label for="cible_e_1">
                <img src="img\checked.png" id="cible_e_1C" alt="" style="display:none"/>
                <img src="img\multiply.png" id="cible_e_1C2" alt=""/>
                Small
              </label> <br>
              <input type="checkbox" name="cible_e_m" value="" id="cible_e_2" class="radiocheck" style="display:none">
              <label for="cible_e_2">
                <img src="img\checked.png" id="cible_e_2C" alt="" style="display:none"/>
                <img src="img\multiply.png" id="cible_e_2C2" alt=""/>
                Medium
              </label> <br>
              <input type="checkbox" name="cible_e_l" value="" id="cible_e_3" class="radiocheck" style="display:none">
              <label for="cible_e_3">
                <img src="img\checked.png" id="cible_e_3C" alt="" style="display:none"/>
                <img src="img\multiply.png" id="cible_e_3C2" alt=""/>
                Large
              </label> <br>
              <label for=""><strong class="undertitle"><u>Ciblage candidats :</u></strong></label> <br>
              <input type="checkbox" name="cible_c_1" value="" id="cible_c_1" class="radiocheck" style="display:none">
              <label for="cible_c_1">
                <img src="img\checked.png" id="cible_c_1C" alt="" style="display:none"/>
                <img src="img\multiply.png" id="cible_c_1C2" alt=""/>
                General Staffing
              </label> <br>
              <input type="checkbox" name="cible_c_2" value="" id="cible_c_2" class="radiocheck" style="display:none">
              <label for="cible_c_2">
                <img src="img\checked.png" id="cible_c_2C" alt="" style="display:none"/>
                <img src="img\multiply.png" id="cible_c_2C2" alt=""/>
                Professional Staffing
              </label> <br>
              <input type="checkbox" name="cible_c_3" value="" id="cible_c_3" class="radiocheck" style="display:none">
              <label for="cible_c_3">
                <img src="img\checked.png" id="cible_c_3C" alt="" style="display:none"/>
                <img src="img\multiply.png" id="cible_c_3C2" alt=""/>
                Tous profils
              </label> <br>
              <label for=""><strong class="undertitle"><u>Ciblage interlocuteurs clients :</u></strong></label> <br>
              <input type="checkbox" name="cible_i_1" value="" id="cible_i_1" class="radiocheck" style="display:none">
              <label for="cible_i_1">
                <img src="img\checked.png" id="cible_i_1C" alt="" style="display:none"/>
                <img src="img\multiply.png" id="cible_i_1C2" alt=""/>
                DRH
              </label> <br>
              <input type="checkbox" name="cible_i_2" value="" id="cible_i_2" class="radiocheck" style="display:none">
              <label for="cible_i_2">
                <img src="img\checked.png" id="cible_i_2C" alt="" style="display:none"/>
                <img src="img\multiply.png" id="cible_i_2C2" alt=""/>
                Acheteurs
              </label> <br>
              <input type="checkbox" name="cible_i_3" value="" id="cible_i_3" class="radiocheck" style="display:none">
              <label for="cible_i_3">
                <img src="img\checked.png" id="cible_i_3C" alt="" style="display:none"/>
                <img src="img\multiply.png" id="cible_i_3C2" alt=""/>
                Finance
              </label> <br>
              <input type="checkbox" name="cible_i_4" value="" id="cible_i_4" class="radiocheck" style="display:none">
              <label for="cible_i_4">
                <img src="img\checked.png" id="cible_i_4C" alt="" style="display:none"/>
                <img src="img\multiply.png" id="cible_i_4C2" alt=""/>
                Autres
              </label>
              <textarea name="autrecible" id="textarea8" rows="8" cols="40" placeholder="Précisez"></textarea> -->
            </div>
            <div class="col-md-12">
              <h3>
                Bénéfices
              </h3>
              <h4>
                <strong>
                  <?php echo $donnees2['benef_proj_fiche']; ?>
                </strong>
              </h4>
              <h4>
                Gains
              </h4>
              <h4>
                <strong>
                  <?php echo $donnees2['gains_proj_fiche']; ?>
                </strong>
              </h4>
              <h4>
                Périmetre
              </h4>
              <h4>
                <strong>
                  <?php echo $donnees2['perim_proj_fiche']; ?>
                </strong>
              </h4>
              <!-- <label for="ta4"><strong>Descriptif qualitatif des bénéfices attendus</strong></label>
              <textarea name="benef_proj" rows="4" cols="40" placeholder="Bénéfices attendus" id="ta4" class="champ"></textarea> <br>
              <label for="ta5"><strong>Gains chiffrés attendus si quantifiables</strong></label>
              <textarea name="gain_proj" rows="4" cols="40" placeholder="Gains/indicateurs" id=ta5 class="champ"></textarea> <br>
              <label for="ta6">Quelles sont les entités concernées par le projet</label>
              <textarea name="perim_proj" rows="4" cols="40" placeholder="Périmetre" id="ta6" class="champ"></textarea> <br> -->
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
          <div class="col-md-12 blockform" id="3" style="background-color:#f5f5f5">
            <div class="col-md-4 pilote">
              <h3>
                Date envisagée de mise à disposition
              </h3>
              <?php echo $donnees2['date_deploi_fiche']; ?>
            </div>
            <div class="col-md-4">
              <h3>
                Ce qui paraît incontournable pour la réussite
              </h3>
              <?php echo $donnees2['facteur_succ_fiche']; ?>
            </div>
            <div class="col-md-4">
              <h3>
                Qui va porter cette offre au sein de nos réseaux
              </h3>
              <?php echo $donnees2['port_offre_fiche']; ?>
            </div>
            <div class="col-md-4 pilote">
              <h3>
                Canal de déploiement
              </h3>
              <h4>
                Ligne managériale : <br>
                <strong>
                  <?php echo $donnees2['lignem_fiche']; ?>
                </strong>
              </h4>
              <h4>
                Pédagogie en réunion de zone : <br>
                <strong>
                  <?php echo $donnees2['pedagogie_fiche']; ?>
                </strong>
              </h4>
              <h4>
                Rituels existants : <br>
                <strong>
                  <?php echo $donnees2['rituel_fiche']; ?>
                </strong>
              </h4>
              <h4>
                Précisions : <br>
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
                Appropriation à prévoir: <br>
                <strong>
                  <?php echo $donnees2['approp_fiche']; ?>
                  <?php echo $donnees2['mode_apropr_fiche']; ?>
                </strong>
              </h4>
              <h4>
                Relais de professionalisation: <br>
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
                Essentiel: <br>
                <strong>
                  <?php echo $donnees2['diffess_fiche']; ?>
                </strong>
              </h4>
              <h4>
                Intranet BU : <br>
                <strong>
                  <?php echo $donnees2['diffintra_fiche']; ?>
                </strong>
              </h4>
              <h4>
                Digital : <br>
                <strong>
                  <?php echo $donnees2['diffdig_fiche']; ?>
                </strong>
              </h4>
              <h4>
                Autre : <br>
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
          <div class="col-md-12 blockform" id="4" style="background-color:#fdfdfd">
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
              <h3>
                Motivations personnelles :
              </h3> <br>
              <h4>
                <strong>
                  <?php echo $donnees2['synthmotiv_fiche']; ?>
                </strong>
              </h4>
            </div>
          </div> <br>
        </div>
        <div class="col-md-12 part5">
          <!-- <input type="button" name="name" value="Valider" class="submit" onclick="Verif_form(this.form)"> -->
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
