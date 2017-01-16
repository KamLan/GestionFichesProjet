<?php
  include 'header.php';
 ?>

  <div class="container projects-main">
    <div class="col-md-12 main">
      <div class="col-md-3">
        <img class="brandlogo" src="img\adeccologo.png" alt="" />
      </div>
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
          <input type="text" name="titre_proj" placeholder="Titre du projet" value="" style="margin-bottom:0px; margin-right:0px;"id="testinput" class="champ" >
          <h4>
            date demande :
            <strong>
              <?php
                $today = date('d-m-Y');
                echo $today;
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
              <label for="nom_pil">Nom</label>
              <input type="text" name="nom_pil" placeholder="" id="nom_pil" value="" class="champ">
              <label for="email_pil">Email</label>
              <input type="email" name="email_pil" placeholder="" id="email_pil" value="" class="champ">
              <label for="tel_pil">Téléphone</label>
              <input type="text" name="tel_pil" placeholder="" id="tel_pil" value="" class="champ">
              <label for="soc_pil">Société</label>
              <input type="text" name="soc_pil" placeholder="" id="soc_pil" value="" class="champ">
            </div>
            <div class="col-md-6 block">
              <div class="col-md-12">
                <div class="col-md-12">
                  <div class="col-md-6">
                    <h3>
                      Entité / Societé
                    </h3>
                  </div>
                  <div class="col-md-6 entity">
                    <input type="text" name="bu_proj" placeholder="BU" value="" id="bu_proj" class="champ">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="col-md-6">
                    <h3>
                      Membre codir ou manager
                    </h3>
                  </div>
                  <div class="col-md-6 entity">
                    <input type="text" name="name_mem" placeholder="nom" value="" id="name_manag" class="champ">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 block">
              <div class="col-md-6 priority">
                <h3>
                  Priorité stratégique
                </h3>
              </div>
              <div class="col-md-6">

                  <input type="checkbox" name="couv_emp" value="" id="prio1" class="radiocheck" style="display:none">
                  <label for="prio1">
                    <img src="img\checked.png" id="prio1C" alt="" style="display:none"/>
                    <img src="img\multiply.png" id="prio1C2" alt=""/>
                    Couvrir toutes les formes d'emploi
                  </label> <br>
                  <input type="checkbox" name="acc_transf" value="" id="prio2" class="radiocheck" style="display:none">
                  <label for="prio2">
                    <img src="img\checked.png" id="prio2C" alt="" style="display:none"/>
                    <img src="img\multiply.png" id="prio2C2" alt=""/>
                    Accompagner la transformation des compétences
                  </label> <br>
                  <input type="checkbox" name="new_digit" value="" id="prio3" class="radiocheck" style="display:none">
                  <label for="prio3">
                    <img src="img\checked.png" id="prio3C" alt="" style="display:none"/>
                    <img src="img\multiply.png" id="prio3C2" alt=""/>
                    Proposer de nouvelles solutions digitales
                  </label>
              </div>
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
            <div class="col-md-4">
              <label for="ta1"><strong>Pourquoi ce projet? Comment</strong> est-il né?</label>
              <textarea name="contexte_proj" rows="4" cols="40" placeholder="Contexte" id="ta1" class="champ"></textarea> <br>
              <label for="ta2"><strong>Décrire l'action du projet.</strong> ce qui doit être fait</label>
              <textarea name="descri_proj" rows="4" cols="40" placeholder="Description" id=ta2 class="champ"></textarea> <br>
              <label for="ta3"><strong>Indiquer les objectifs visés.</strong> Quoi, combien...</label>
              <textarea name="obj_proj" rows="4 " cols="40" placeholder="Objectif" id="ta3" class="champ"></textarea><br><br>
            </div>
            <div class="col-md-4 pilote">
              <label for="">Ciblage entreprise :</label> <br>
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
              <label for="">Ciblage candidats :</label> <br>
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
              <label for="">Ciblage interlocuteurs clients :</label> <br>
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
              <textarea name="autrecible" id="textarea8" rows="8" cols="40" placeholder="Précisez"></textarea>
            </div>
            <div class="col-md-4">
              <label for="ta4"><strong>Descriptif qualitatif des bénéfices attendus</strong></label>
              <textarea name="benef_proj" rows="4" cols="40" placeholder="Bénéfices attendus" id="ta4" class="champ"></textarea> <br>
              <label for="ta5"><strong>Gains chiffrés attendus si quantifiables</strong></label>
              <textarea name="gain_proj" rows="4" cols="40" placeholder="Gains/indicateurs" id=ta5 class="champ"></textarea> <br>
              <label for="ta6">Quelles sont les entités concernées par le projet</label>
              <textarea name="perim_proj" rows="4" cols="40" placeholder="Périmetre" id="ta6" class="champ"></textarea> <br>
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
              <input type="date" name="date_dispodeploi" value="">
            </div>
            <div class="col-md-4">
              <h3>
                Ce qui paraît incontournable pour la réussite
              </h3>
              <textarea name="facteur_succ" rows="4" cols="40" placeholder="Facteurs clés" id="ta7" class="champ"></textarea>
            </div>
            <div class="col-md-4">
              <h3>
                Qui va porter cette offre au sein de nos réseaux
              </h3>
              <textarea name="port_offre" rows="4" cols="40" placeholder="Précisez" id="ta8" class="champ"></textarea>
            </div>
            <div class="col-md-4 pilote">
              <h3>
                Canal de déploiement
              </h3>
              Ligne managériale <br>
              <input type="radio" name="lm" value="oui" class="radiocheck">Oui
              <input type="radio" name="lm" value="non" class="radiocheck">Non <br>
              Pédagogie en réunion de zone <br>
              <input type="radio" name="Peda" value="oui" class="radiocheck">Oui
              <input type="radio" name="Peda" value="non" class="radiocheck">Non <br>
              Rituel existant pour lancer le projet <br>
              <input type="radio" name="Rituel" value="oui" id="affichetext1" class="radiocheck">Oui
              <input type="radio" name="Rituel" value="non" id="affichetext2" class="radiocheck">Non <br>
              <textarea name="R_y_text" rows="4" cols="40" placeholder="Précisez (ex: réunions DZ, calls hebdo, autre, ...)" id="5" class="champ"></textarea> <br>
              <textarea name="R_n_text" rows="4" cols="40" placeholder="Pourquoi ?" id="6" class="champ"></textarea> <br>
            </div>
            <div class="col-md-4 pilote">
              <h3>
                Professionalisation
              </h3>
              Appropriation à prévoir <br>
              <input type="radio" name="Aprop" value="oui" id="affichetext3" class="radiocheck">Oui
              <input type="radio" name="Aprop" value="préconisé" id="affichetext4" class="radiocheck">Préconisé
              <input type="radio" name="Aprop" value="non" id="cachertext3" class="radiocheck">Non <br><br>
              <textarea name="A_ym_text" rows="4" cols="40" placeholder="Précisez le mode d'appropriation" id="7" class="champ"></textarea> <br>
              <textarea name="rel_prof" rows="4" cols="40" Placeholder="Précisez" id="8" class="champ" ></textarea>
            </div>
            <div class="col-md-4 pilote">
              <h3>
                Diffusion des supports
              </h3>
              Essentiel <br>
              <input type="radio" name="Ess" value="oui" class="radiocheck">Oui
              <input type="radio" name="Ess" value="non" class="radiocheck">Non <br>
              Intranet BU <br>
              <input type="radio" name="Intra" value="oui" class="radiocheck">Oui
              <input type="radio" name="Intra" value="non" class="radiocheck">Non <br>
              Digital <br>
              <label for="dig1">
                <img src="img\checked.png" id="dig1C" alt="" style="display:none"/>
                <img src="img\multiply.png" id="dig1C2" alt=""/>
                Site internet BU
              </label> <br>
              <input type="checkbox" name="dig_si" value="" id="dig1" class="radiocheck" style="display:none">
              <label for="dig2">
                <img src="img\checked.png" id="dig2C" alt="" style="display:none"/>
                <img src="img\multiply.png" id="dig2C2" alt=""/>
                Réseaux sociaux BU
              </label>
              <input type="checkbox" name="dig_rs" value="" id="dig2" class="radiocheck" class="radiocheck" style="display:none">
               <br><br>
              Autre <br>
              <textarea name="autre_diff" rows="4" cols="40" placeholder="Précisez" id="9" class="champ" ></textarea>
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
              Noter l'effort d'implémentation <br>
              <div class="notationgrade">
                <label for="radio1" class="labelradio1">
                  <img id="labelimg1" src="img\level1.png" alt="" />
                  <img src="img\checked.png" id="labelcheck1" style="display:none" alt="" />
                </label>
                <label for="radio2" class="labelradio2">
                  <img id="labelimg2" src="img\level2.png" alt="" />
                  <img src="img\checked.png" id="labelcheck2" style="display:none" alt="" />
                </label>
                <label for="radio3" class="labelradio3">
                  <img id="labelimg3" src="img\level3.png" alt="" />
                  <img src="img\checked.png" id="labelcheck3" style="display:none" alt="" />
                </label>
                <label for="radio4" class="labelradio4">
                  <img id="labelimg4" src="img\level4.png" alt="" />
                  <img src="img\checked.png" id="labelcheck4" style="display:none" alt="" />
                </label>
                <label for="radio5" class="labelradio5">
                  <img id="labelimg5" src="img\level5.png" alt="" />
                  <img src="img\checked.png" id="labelcheck5" style="display:none" alt="" />
                </label>
              </div>
              <input type="radio" name="eff" value="1" class="radiocheck" id="radio1" style="display:none">
              <input type="radio" name="eff" value="2" class="radiocheck" id="radio2" style="display:none">
              <input type="radio" name="eff" value="3" class="radiocheck" id="radio3" style="display:none">
              <input type="radio" name="eff" value="4" class="radiocheck" id="radio4" style="display:none">
              <input type="radio" name="eff" value="5" class="radiocheck" id="radio5" style="display:none"> <br>
            </div>
            <div class="col-md-2 notation">
              Noter la différencation vs concurrence <br>
              <div class="notationgrade">
                <label for="radio6" class="labelradio6">
                  <img id="labelimg6" src="img\level1.png" alt="" />
                  <img src="img\checked.png" id="labelcheck6" style="display:none" alt="" />
                </label>
                <label for="radio7" class="labelradio7">
                  <img id="labelimg7" src="img\level2.png" alt="" />
                  <img src="img\checked.png" id="labelcheck7" style="display:none" alt="" />
                </label>
                <label for="radio8" class="labelradio8">
                  <img id="labelimg8" src="img\level3.png" alt="" />
                  <img src="img\checked.png" id="labelcheck8" style="display:none" alt="" />
                </label>
                <label for="radio9" class="labelradio9">
                  <img id="labelimg9" src="img\level4.png" alt="" />
                  <img src="img\checked.png" id="labelcheck9" style="display:none" alt="" />
                </label>
                <label for="radio10" class="labelradio10">
                  <img id="labelimg10" src="img\level5.png" alt="" />
                  <img src="img\checked.png" id="labelcheck10" style="display:none" alt="" />
                </label>
              </div>
              <input type="radio" name="diff" value="1" class="radiocheck" id="radio6" style="display:none">
              <input type="radio" name="diff" value="2" class="radiocheck" id="radio7" style="display:none">
              <input type="radio" name="diff" value="3" class="radiocheck" id="radio8" style="display:none">
              <input type="radio" name="diff" value="4" class="radiocheck" id="radio9" style="display:none">
              <input type="radio" name="diff" value="5" class="radiocheck" id="radio10" style="display:none"> <br>
            </div>
            <div class="col-md-2 notation">
              Noter le temps nécessaire déploiement <br>
              <div class="notationgrade">
                <label for="radio11" class="labelradio11">
                  <img id="labelimg11" src="img\level1.png" alt="" />
                  <img src="img\checked.png" id="labelcheck11" style="display:none" alt="" />
                </label>
                <label for="radio12" class="labelradio12">
                  <img id="labelimg12" src="img\level2.png" alt="" />
                  <img src="img\checked.png" id="labelcheck12" style="display:none" alt="" />
                </label>
                <label for="radio13" class="labelradio13">
                  <img id="labelimg13" src="img\level3.png" alt="" />
                  <img src="img\checked.png" id="labelcheck13" style="display:none" alt="" />
                </label>
                <label for="radio14" class="labelradio14">
                  <img id="labelimg14" src="img\level4.png" alt="" />
                  <img src="img\checked.png" id="labelcheck14" style="display:none" alt="" />
                </label>
                <label for="radio15" class="labelradio15">
                  <img id="labelimg15" src="img\level5.png" alt="" />
                  <img src="img\checked.png" id="labelcheck15" style="display:none" alt="" />
                </label>
              </div>
              <input type="radio" name="time" value="1" class="radiocheck" id="radio11" style="display:none">
              <input type="radio" name="time" value="2" class="radiocheck" id="radio12" style="display:none">
              <input type="radio" name="time" value="3" class="radiocheck" id="radio13" style="display:none">
              <input type="radio" name="time" value="4" class="radiocheck" id="radio14" style="display:none">
              <input type="radio" name="time" value="5" class="radiocheck" id="radio15" style="display:none"> <br>
            </div>
            <div class="col-md-2 notation">
              Noter la facilité de mesure d'impact <br>
              <div class="notationgrade">
                <label for="radio16" class="labelradio16">
                  <img id="labelimg16" src="img\level1.png" alt="" />
                  <img src="img\checked.png" id="labelcheck16" style="display:none" alt="" />
                </label>
                <label for="radio17" class="labelradio17">
                  <img id="labelimg17" src="img\level2.png" alt="" />
                  <img src="img\checked.png" id="labelcheck17" style="display:none" alt="" />
                </label>
                <label for="radio18" class="labelradio18">
                  <img id="labelimg18" src="img\level3.png" alt="" />
                  <img src="img\checked.png" id="labelcheck18" style="display:none" alt="" />
                </label>
                <label for="radio18" class="labelradio19">
                  <img id="labelimg19" src="img\level4.png" alt="" />
                  <img src="img\checked.png" id="labelcheck19" style="display:none" alt="" />
                </label>
                <label for="radio20" class="labelradio20">
                  <img id="labelimg20" src="img\level5.png" alt="" />
                  <img src="img\checked.png" id="labelcheck20" style="display:none" alt="" />
                </label>
              </div>
              <input type="radio" name="fac" value="1" class="radiocheck" id="radio16" style="display:none">
              <input type="radio" name="fac" value="2" class="radiocheck" id="radio17" style="display:none">
              <input type="radio" name="fac" value="3" class="radiocheck" id="radio18" style="display:none">
              <input type="radio" name="fac" value="4" class="radiocheck" id="radio19" style="display:none">
              <input type="radio" name="fac" value="5" class="radiocheck" id="radio20" style="display:none"> <br>
            </div>
            <div class="col-md-2 notation">
              Noter la création de valeur / impact business <br>
              <div class="notationgrade">
                <label for="radio21" class="labelradio21">
                  <img id="labelimg21" src="img\level1.png" alt="" />
                  <img src="img\checked.png" id="labelcheck21" style="display:none" alt="" />
                </label>
                <label for="radio22" class="labelradio22">
                  <img id="labelimg22" src="img\level2.png" alt="" />
                  <img src="img\checked.png" id="labelcheck22" style="display:none" alt="" />
                </label>
                <label for="radio23" class="labelradio23">
                  <img id="labelimg23" src="img\level3.png" alt="" />
                  <img src="img\checked.png" id="labelcheck23" style="display:none" alt="" />
                </label>
                <label for="radio24" class="labelradio24">
                  <img id="labelimg24" src="img\level4.png" alt="" />
                  <img src="img\checked.png" id="labelcheck24" style="display:none" alt="" />
                </label>
                <label for="radio25" class="labelradio25">
                  <img id="labelimg25" src="img\level5.png" alt="" />
                  <img src="img\checked.png" id="labelcheck25" style="display:none" alt="" />
                </label>
              </div>
              <input type="radio" name="crea" value="1" class="radiocheck" id="radio21" style="display:none">
              <input type="radio" name="crea" value="2" class="radiocheck" id="radio22" style="display:none">
              <input type="radio" name="crea" value="3" class="radiocheck" id="radio23" style="display:none">
              <input type="radio" name="crea" value="4" class="radiocheck" id="radio24" style="display:none">
              <input type="radio" name="crea" value="5" class="radiocheck" id="radio25" style="display:none"> <br> <br>
            </div>
            <div class="col-md-6 motivation">
                <textarea name="motiv_perso" rows="4" cols="40" placeholder="Pourquoi vous y tenez - vos motivations à mener à bien ce projet personnellement" id="10" class="champ"></textarea> <br>
            </div>
          </div> <br>
        </div>
        <div class="col-md-12 part5">
          <input type="button" name="name" value="Valider" class="submit" onclick="Verif_form(this.form)">
        </div>
      </form>
    </div>
    <script src="js/formScript.js"></script>
  </body>
</html>
