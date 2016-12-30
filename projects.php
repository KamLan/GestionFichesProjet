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
            Comité des offres |
          </strong>
          Fiche projet pour validation
        </h1>
        <h2>
          date demande :
          <strong>
            <?php
              $today = date('d-m-Y');
              echo $today;
           ?>
          </strong>
        </h2>
      </div>
    </div>
    <div class="col-md-12 projects">
      <form class="" name="formulaire" action="inserttask.php" method="post">
        <div class="col-md-12 centerit" >
          <input type="text" name="titre_proj" placeholder="Titre du projet" value="">
        </div>
        <div class="part1">
          <h2>
            1 Identification
            <img src="img/eye.png" alt="" id="affiche" />
            <img src="img/eyenone.png" alt="" id="cache" />
          </h2>
          <div class="col-md-12 blockform" id="1" style="background-color:#e6e6e6">
            <h3>
              Personne en charge du projet et de son implémentation
            </h3>
            <div class="col-md-12 pilote">
              <input type="text" name="nom_pil" placeholder="Nom" value="">
              <input type="email" name="email_pil" placeholder="Email" value="">
              <input type="text" name="tel_pil" placeholder="Tel Portable" value="">
              <input type="text" name="soc_pil" placeholder="Societe" value="">
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
                    <input type="text" name="bu_proj" placeholder="BU" value="">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="col-md-6">
                    <h3>
                      Membre codir ou manager
                    </h3>
                  </div>
                  <div class="col-md-6 entity">
                    <input type="text" name="name_mem" placeholder="nom" value="">
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
                  <img src="img\checked.png" id="prio1C" alt="" style="display:none"/>
                  <img src="img\multiply.png" id="prio1C2" alt=""/>
                  <input type="checkbox" name="couv_emp" value="" id="prio1" class="radiocheck" style="display:none">
                  <label for="prio1">Couvrir toutes les formes d'emploi</label> <br>
                  <img src="img\checked.png" id="prio2C" alt="" style="display:none"/>
                  <img src="img\multiply.png" id="prio2C2" alt=""/>
                  <input type="checkbox" name="acc_transf" value="" id="prio2" class="radiocheck" style="display:none">
                  <label for="prio2">Accompagner la transformation des compétences</label> <br>
                  <img src="img\checked.png" id="prio3C" alt="" style="display:none"/>
                  <img src="img\multiply.png" id="prio3C2" alt=""/>
                  <input type="checkbox" name="new_digit" value="" id="prio3" class="radiocheck" style="display:none">
                  <label for="prio3">Proposer de nouvelles solutions digitales</label>
              </div>
            </div>
          </div>
        </div>
        <div class="part2">
          <h2>
            2 Description
            <img src="img/eye.png" alt="" id="affiche2" />
            <img src="img/eyenone.png" alt="" id="cache2" />
          </h2>
          <div class="col-md-12 blockform" id="2" style="background-color:#ececec">
            <div class="col-md-4">
              <textarea name="contexte_proj" rows="4" cols="40" placeholder="Pourquoi ce projet ? Comment est-il né ?"></textarea> <br>
              <textarea name="descri_proj" rows="4" cols="40" placeholder="Décrire l'action / le projet - ce qui doit être fait"></textarea> <br>
              <textarea name="obj_proj" rows="4 " cols="40" placeholder="indiquer les objectif visés - quoi, combien, pour quand"></textarea><br><br>
            </div>
            <div class="col-md-4 pilote">
              <label for="cibl1">Ciblage entreprise :</label> <br>
               <select class="" name="cibl_ent" id="cibl1">
                <option> Small
                <option> Medium
                <option> Large
              </select> <br><br>
              <label for="cibl2">Ciblage candidats :</label> <br>
              <select class="" name="cibl_cand" id="cibl2">
                <option> General Staffing
                <option> Professional Staffing
                <option> Tous profils
              </select> <br><br>
              <label for="cibl3">Ciblage interlocuteurs clients :</label> <br>
              <select class="" name="cibl_cli" id="cibl3">
                <option> DRH
                <option> Acheteurs
                <option> Finance
                <option> Producteurs
                <option> Autres
              </select> <br><br>
            </div>
            <div class="col-md-4">
              <textarea name="benef_proj" rows="4" cols="40" placeholder="Descriptif qualitatif des bénéfices attendus, retombées, ..."></textarea> <br>
              <textarea name="gain_proj" rows="4" cols="40" placeholder="Gains chiffrés attendus si quantifiables, hains qualitatifs explicités - Indicateurs objectif de suivi proposés (obligatoire) et comment les suivre (outil)"></textarea> <br>
              <textarea name="perim_proj" rows="4" cols="40" placeholder="Quelles sont les entités / directions concernées par l'action ou le projet"></textarea> <br>
            </div>
          </div>
        </div>
        <div class="part3">
          <h2>
            3 Déploiement
            <img src="img/eye.png" alt="" id="affiche3" />
            <img src="img/eyenone.png" alt="" id="cache3" />
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
                Facteurs clés de succès
              </h3>
              <textarea name="facteur_succ" rows="4" cols="40" placeholder="Qu'est-ce qui vous paraît incontournable dans le déploiement pour la réussite du projet ?"></textarea>
            </div>
            <div class="col-md-4">
              <h3>
                Porteurs de l'offre
              </h3>
              <textarea name="port_offre" rows="4" cols="40" placeholder="Qui va porter cette offre au sein de nos réseaux - identifier les fonctions clés"></textarea>
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
              <textarea name="R_y_text" rows="4" cols="40" placeholder="Préciser (ex: réunions DZ, calls hebdo, autre, ...)" id="5"></textarea> <br>
              <textarea name="R_n_text" rows="4" cols="40" placeholder="Pourquoi ?" id="6"></textarea> <br>
            </div>
            <div class="col-md-4 pilote">
              <h3>
                Professionalisation
              </h3>
              Appropriation à prévoir <br>
              <input type="radio" name="Aprop" value="oui" id="affichetext3" class="radiocheck">Oui
              <input type="radio" name="Aprop" value="préconisé" id="affichetext4" class="radiocheck">Préconisé
              <input type="radio" name="Aprop" value="non" id="cachertext3" class="radiocheck">Non <br><br>
              <textarea name="A_ym_text" rows="4" cols="40" placeholder="Préciser le mode d'appropriation" id="7"></textarea> <br>
              <textarea name="rel_prof" rows="4" cols="40" Placeholder="Préciser (ex: RESZ, RVZ, Ingénieurs formation, ...)"></textarea>
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
              <img src="img\checked.png" id="dig1C" alt="" style="display:none"/>
              <img src="img\multiply.png" id="dig1C2" alt=""/>
              <label for="dig1">Site internet BU</label> <br>
              <input type="checkbox" name="dig_si" value="" id="dig1" class="radiocheck" style="display:none">
              <img src="img\checked.png" id="dig2C" alt="" style="display:none"/>
              <img src="img\multiply.png" id="dig2C2" alt=""/>
              <label for="dig2">Réseaux sociaux BU</label>
              <input type="checkbox" name="dig_rs" value="" id="dig2" class="radiocheck" class="radiocheck" style="display:none">
               <br><br>
              Autre <br>
              <textarea name="autre_diff" rows="4" cols="40" placeholder="Préciser"></textarea>
            </div>
          </div>
        </div>
        <div class="part4">
          <h2>
            4 Synthèse : Votre vision du projet (bleu --, vert ++)
            <img src="img/eye.png" alt="" id="affiche4" />
            <img src="img/eyenone.png" alt="" id="cache4" />
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
                <textarea name="motiv_perso" rows="4" cols="40" placeholder="Pourquoi vous y tenez - vos motivations à mener à bien ce projet personnellement"></textarea> <br>
            </div>
          </div> <br>
        </div>
        <div class="col-md-12 part5">
          <input type="button" name="name" value="Valider" class="submit" onclick="Verif_form(this.form)">
        </div>
      </form>
    </div>
    <script type="text/javascript">
      $(function (){
        $('div#1').hide();
        $('div#2').hide();
        $('div#3').hide();
        $('div#4').hide();
        $('textarea#5').hide();
        $('textarea#6').hide();
        $('textarea#7').hide();
        $('#cache').hide();
        $('#cache2').hide();
        $('#cache3').hide();
        $('#cache4').hide();
        $('#prio1').click(function(){
          $('#prio1C').toggle('slow');
          $('#prio1C2').toggle('slow');
        });
        $('#prio2').click(function(){
          $('#prio2C').toggle('slow');
          $('#prio2C2').toggle('slow');
        });
        $('#prio3').click(function(){
          $('#prio3C').toggle('slow');
          $('#prio3C2').toggle('slow');
        });
        $('#dig1').click(function(){
          $('#dig1C').toggle('slow');
          $('#dig1C2').toggle('slow');
        });
        $('#dig2').click(function(){
          $('#dig2C').toggle('slow');
          $('#dig2C2').toggle('slow');
        });
        $('#affiche').click(function(){
          $('div#1').show('slow');
          $('#cache').show('slow');
          $('#affiche').hide(1000);
        });
        $('#cache').click(function(){
          $('div#1').hide(1000);
          $('#cache').hide(1000);
          $('#affiche').show('slow');
        });
        $('#affiche2').click(function(){
          $('div#2').show('slow');
          $('#cache2').show('slow');
          $('#affiche2').hide(1000);
        });
        $('#cache2').click(function(){
          $('div#2').hide(1000);
          $('#cache2').hide(1000);
          $('#affiche2').show('slow');
        });
        $('#affiche3').click(function(){
          $('div#3').show('slow');
          $('#cache3').show('slow');
          $('#affiche3').hide(1000);
        });
        $('#cache3').click(function(){
          $('div#3').hide(1000);
          $('#cache3').hide(1000);
          $('#affiche3').show('slow');
        });
        $('#affiche4').click(function(){
          $('div#4').show('slow');
          $('#cache4').show('slow');
          $('#affiche4').hide(1000);
        });
        $('#cache4').click(function(){
          $('div#4').hide(1000);
          $('#cache4').hide(1000);
          $('#affiche4').show('slow');
        });
        $('#affichetext1').click(function(){
          $('textarea#5').show('slow');
          $('textarea#6').hide(1000);
        });
        $('#affichetext2').click(function(){
          $('textarea#6').show('slow');
          $('textarea#5').hide(1000);
        });
        $('#affichetext3').click(function(){
          $('textarea#7').show('slow');
        });
        $('#affichetext4').click(function(){
          $('textarea#7').show('slow');
        });
        $('#cachertext3').click(function(){
          $('textarea#7').hide(1000);
        });
        $('.labelradio1').click(function(){
          $('#labelcheck1').toggle('slow');
          $('#labelimg1').toggle('slow');
          $('#labelimg2').show();
          $('#labelimg3').show();
          $('#labelimg4').show();
          $('#labelimg5').show();
          $('#labelcheck2').hide();
          $('#labelcheck3').hide();
          $('#labelcheck4').hide();
          $('#labelcheck5').hide();
        });
        $('.labelradio2').click(function(){
          $('#labelcheck2').toggle('slow');
          $('#labelimg2').toggle('slow');
          $('#labelimg1').show();
          $('#labelimg3').show();
          $('#labelimg4').show();
          $('#labelimg5').show();
          $('#labelcheck1').hide();
          $('#labelcheck3').hide();
          $('#labelcheck4').hide();
          $('#labelcheck5').hide();
        });
        $('.labelradio3').click(function(){
          $('#labelcheck3').toggle('slow');
          $('#labelimg3').toggle('slow');
          $('#labelimg1').show();
          $('#labelimg2').show();
          $('#labelimg4').show();
          $('#labelimg5').show();
          $('#labelcheck1').hide();
          $('#labelcheck2').hide();
          $('#labelcheck4').hide();
          $('#labelcheck5').hide();
        });
        $('.labelradio4').click(function(){
          $('#labelcheck4').toggle('slow');
          $('#labelimg4').toggle('slow');
          $('#labelimg1').show();
          $('#labelimg2').show();
          $('#labelimg3').show();
          $('#labelimg5').show();
          $('#labelcheck1').hide();
          $('#labelcheck2').hide();
          $('#labelcheck3').hide();
          $('#labelcheck5').hide();
        });
        $('.labelradio5').click(function(){
          $('#labelcheck5').toggle('slow');
          $('#labelimg5').toggle('slow');
          $('#labelimg1').show();
          $('#labelimg2').show();
          $('#labelimg3').show();
          $('#labelimg4').show();
          $('#labelcheck1').hide();
          $('#labelcheck2').hide();
          $('#labelcheck3').hide();
          $('#labelcheck4').hide();
        });
        $('.labelradio6').click(function(){
          $('#labelcheck6').toggle('slow');
          $('#labelimg6').toggle('slow');
          $('#labelimg7').show();
          $('#labelimg8').show();
          $('#labelimg9').show();
          $('#labelimg10').show();
          $('#labelcheck7').hide();
          $('#labelcheck8').hide();
          $('#labelcheck9').hide();
          $('#labelcheck10').hide();
        });
        $('.labelradio7').click(function(){
          $('#labelcheck7').toggle('slow');
          $('#labelimg7').toggle('slow');
          $('#labelimg6').show();
          $('#labelimg8').show();
          $('#labelimg9').show();
          $('#labelimg10').show();
          $('#labelcheck6').hide();
          $('#labelcheck8').hide();
          $('#labelcheck9').hide();
          $('#labelcheck10').hide();
        });
        $('.labelradio8').click(function(){
          $('#labelcheck8').toggle('slow');
          $('#labelimg8').toggle('slow');
          $('#labelimg6').show();
          $('#labelimg7').show();
          $('#labelimg9').show();
          $('#labelimg10').show();
          $('#labelcheck6').hide();
          $('#labelcheck7').hide();
          $('#labelcheck9').hide();
          $('#labelcheck10').hide();
        });
        $('.labelradio9').click(function(){
          $('#labelcheck9').toggle('slow');
          $('#labelimg9').toggle('slow');
          $('#labelimg6').show();
          $('#labelimg7').show();
          $('#labelimg8').show();
          $('#labelimg10').show();
          $('#labelcheck6').hide();
          $('#labelcheck7').hide();
          $('#labelcheck8').hide();
          $('#labelcheck10').hide();
        });
        $('.labelradio10').click(function(){
          $('#labelcheck10').toggle('slow');
          $('#labelimg10').toggle('slow');
          $('#labelimg6').show();
          $('#labelimg7').show();
          $('#labelimg8').show();
          $('#labelimg9').show();
          $('#labelcheck6').hide();
          $('#labelcheck7').hide();
          $('#labelcheck8').hide();
          $('#labelcheck9').hide();
        });
        $('.labelradio11').click(function(){
          $('#labelcheck11').toggle('slow');
          $('#labelimg11').toggle('slow');
          $('#labelimg12').show();
          $('#labelimg13').show();
          $('#labelimg14').show();
          $('#labelimg15').show();
          $('#labelcheck12').hide();
          $('#labelcheck13').hide();
          $('#labelcheck14').hide();
          $('#labelcheck15').hide();
        });
        $('.labelradio12').click(function(){
          $('#labelcheck12').toggle('slow');
          $('#labelimg12').toggle('slow');
          $('#labelimg11').show();
          $('#labelimg13').show();
          $('#labelimg14').show();
          $('#labelimg15').show();
          $('#labelcheck11').hide();
          $('#labelcheck13').hide();
          $('#labelcheck14').hide();
          $('#labelcheck15').hide();
        });
        $('.labelradio13').click(function(){
          $('#labelcheck13').toggle('slow');
          $('#labelimg13').toggle('slow');
          $('#labelimg11').show();
          $('#labelimg12').show();
          $('#labelimg14').show();
          $('#labelimg15').show();
          $('#labelcheck11').hide();
          $('#labelcheck12').hide();
          $('#labelcheck14').hide();
          $('#labelcheck15').hide();
        });
        $('.labelradio14').click(function(){
          $('#labelcheck14').toggle('slow');
          $('#labelimg14').toggle('slow');
          $('#labelimg11').show();
          $('#labelimg12').show();
          $('#labelimg13').show();
          $('#labelimg15').show();
          $('#labelcheck11').hide();
          $('#labelcheck12').hide();
          $('#labelcheck13').hide();
          $('#labelcheck15').hide();
        });
        $('.labelradio15').click(function(){
          $('#labelcheck15').toggle('slow');
          $('#labelimg15').toggle('slow');
          $('#labelimg11').show();
          $('#labelimg12').show();
          $('#labelimg13').show();
          $('#labelimg14').show();
          $('#labelcheck11').hide();
          $('#labelcheck12').hide();
          $('#labelcheck13').hide();
          $('#labelcheck14').hide();
        });
        $('.labelradio16').click(function(){
          $('#labelcheck16').toggle('slow');
          $('#labelimg16').toggle('slow');
          $('#labelimg17').show();
          $('#labelimg18').show();
          $('#labelimg19').show();
          $('#labelimg20').show();
          $('#labelcheck17').hide();
          $('#labelcheck18').hide();
          $('#labelcheck19').hide();
          $('#labelcheck20').hide();
        });
        $('.labelradio17').click(function(){
          $('#labelcheck17').toggle('slow');
          $('#labelimg17').toggle('slow');
          $('#labelimg16').show();
          $('#labelimg18').show();
          $('#labelimg19').show();
          $('#labelimg20').show();
          $('#labelcheck16').hide();
          $('#labelcheck18').hide();
          $('#labelcheck19').hide();
          $('#labelcheck20').hide();
        });
        $('.labelradio18').click(function(){
          $('#labelcheck18').toggle('slow');
          $('#labelimg18').toggle('slow');
          $('#labelimg16').show();
          $('#labelimg17').show();
          $('#labelimg19').show();
          $('#labelimg20').show();
          $('#labelcheck16').hide();
          $('#labelcheck17').hide();
          $('#labelcheck19').hide();
          $('#labelcheck20').hide();
        });
        $('.labelradio19').click(function(){
          $('#labelcheck19').toggle('slow');
          $('#labelimg19').toggle('slow');
          $('#labelimg16').show();
          $('#labelimg17').show();
          $('#labelimg18').show();
          $('#labelimg20').show();
          $('#labelcheck16').hide();
          $('#labelcheck17').hide();
          $('#labelcheck18').hide();
          $('#labelcheck20').hide();
        });
        $('.labelradio20').click(function(){
          $('#labelcheck20').toggle('slow');
          $('#labelimg20').toggle('slow');
          $('#labelimg16').show();
          $('#labelimg17').show();
          $('#labelimg18').show();
          $('#labelimg19').show();
          $('#labelcheck16').hide();
          $('#labelcheck17').hide();
          $('#labelcheck18').hide();
          $('#labelcheck19').hide();
        });
        $('.labelradio21').click(function(){
          $('#labelcheck21').toggle('slow');
          $('#labelimg21').toggle('slow');
          $('#labelimg22').show();
          $('#labelimg23').show();
          $('#labelimg24').show();
          $('#labelimg25').show();
          $('#labelcheck22').hide();
          $('#labelcheck23').hide();
          $('#labelcheck24').hide();
          $('#labelcheck25').hide();
        });
        $('.labelradio22').click(function(){
          $('#labelcheck22').toggle('slow');
          $('#labelimg22').toggle('slow');
          $('#labelimg21').show();
          $('#labelimg23').show();
          $('#labelimg24').show();
          $('#labelimg25').show();
          $('#labelcheck21').hide();
          $('#labelcheck23').hide();
          $('#labelcheck24').hide();
          $('#labelcheck25').hide();
        });
        $('.labelradio23').click(function(){
          $('#labelcheck23').toggle('slow');
          $('#labelimg23').toggle('slow');
          $('#labelimg21').show();
          $('#labelimg22').show();
          $('#labelimg24').show();
          $('#labelimg25').show();
          $('#labelcheck21').hide();
          $('#labelcheck22').hide();
          $('#labelcheck24').hide();
          $('#labelcheck25').hide();
        });
        $('.labelradio24').click(function(){
          $('#labelcheck24').toggle('slow');
          $('#labelimg24').toggle('slow');
          $('#labelimg21').show();
          $('#labelimg22').show();
          $('#labelimg23').show();
          $('#labelimg25').show();
          $('#labelcheck21').hide();
          $('#labelcheck22').hide();
          $('#labelcheck23').hide();
          $('#labelcheck25').hide();
        });
        $('.labelradio25').click(function(){
          $('#labelcheck25').toggle('slow');
          $('#labelimg25').toggle('slow');
          $('#labelimg21').show();
          $('#labelimg22').show();
          $('#labelimg23').show();
          $('#labelimg24').show();
          $('#labelcheck21').hide();
          $('#labelcheck22').hide();
          $('#labelcheck23').hide();
          $('#labelcheck24').hide();
        });
      });

      function Verif_form(formulaire){
        if (document.formulaire.titre_proj.value=="") {
          alert("Le champ: titre du projet n'est pas rempli !")
        }
        else if (document.formulaire.nom_pil.value=="") {
          alert("Le champ: nom du pilote n'est pas rempli !")
        }
        else if (document.formulaire.email_pil.value=="") {
          alert("Le champ: email du pilote n'est pas rempli !")
        }
        else if (document.formulaire.tel_pil.value=="") {
          alert("Le champ: telephone du pilote n'est pas rempli !")
        }
        else if (document.formulaire.soc_pil.value=="") {
          alert("Le champ: Société n'est pas rempli !")
        }
        else if (document.formulaire.bu_proj.value=="") {
          alert("Le champ: BU n'est pas rempli !")
        }
        else if (document.formulaire.name_mem.value=="") {
          alert("Le champ: Membre n'est pas rempli !")
        }
        else if (document.formulaire.contexte_proj.value=="") {
          alert("Le champ: Contexte n'est pas rempli !")
        }
        else if (document.formulaire.descri_proj.value=="") {
          alert("Le champ: Description n'est pas rempli !")
        }
        else if (document.formulaire.obj_proj.value=="") {
          alert("Le champ: Objectifs n'est pas rempli !")
        }
        else if (document.formulaire.cibl_ent.value=="") {
          alert("Le champ: Cibles Entreprises n'est pas rempli !")
        }
        else if (document.formulaire.cibl_cand.value=="") {
          alert("Le champ: Cibles Candidats n'est pas rempli !")
        }
        else if (document.formulaire.cibl_cli.value=="") {
          alert("Le champ: Cibles Clients n'est pas rempli !")
        }
        else if (document.formulaire.benef_proj.value=="") {
          alert("Le champ: Bénéfices n'est pas rempli !")
        }
        else if (document.formulaire.gain_proj.value=="") {
          alert("Le champ: Gains n'est pas rempli !")
        }
        else if (document.formulaire.perim_proj.value=="") {
          alert("Le champ: Périmètre n'est pas rempli !")
        }
        else if (document.formulaire.date_dispodeploi.value=="") {
          alert("Le champ: Date déploiement n'est pas rempli !")
        }
        else if (document.formulaire.facteur_succ.value=="") {
          alert("Le champ: Facteurs succès n'est pas rempli !")
        }
        else if (document.formulaire.port_offre.value=="") {
          alert("Le champ: Porteurs de l'offre n'est pas rempli !")
        }
        else if (document.formulaire.lm.value=="") {
          alert("Le champ: Ligne managériale n'est pas rempli !")
        }
        else if (document.formulaire.Peda.value=="") {
          alert("Le champ: Pédagogie n'est pas rempli !")
        }
        else if (document.formulaire.Rituel.value=="") {
          alert("Le champ: Rituels n'est pas rempli !")
        }
        else if (document.formulaire.Aprop.value=="") {
          alert("Le champ: Apropriation n'est pas rempli !")
        }
        else if (document.formulaire.rel_prof.value=="") {
          alert("Le champ: Relais de professionalisation n'est pas rempli !")
        }
        else if (document.formulaire.Ess.value=="") {
          alert("Le champ: Essentiel n'est pas rempli !")
        }
        else if (document.formulaire.Intra.value=="") {
          alert("Le champ: Intranet n'est pas rempli !")
        }
        else if (document.formulaire.autre_diff.value=="") {
          alert("Le champ: Autre n'est pas rempli !")
        }
        else if (document.formulaire.eff.value=="") {
          alert("Le champ: Effort d'implémentation n'est pas rempli !")
        }
        else if (document.formulaire.diff.value=="") {
          alert("Le champ: Différenciation vs concurrence n'est pas rempli !")
        }
        else if (document.formulaire.time.value=="") {
          alert("Le champ: temps deploiement n'est pas rempli !")
        }
        else if (document.formulaire.fac.value=="") {
          alert("Le champ: Mesure impact n'est pas rempli !")
        }
        else if (document.formulaire.crea.value=="") {
          alert("Le champ: Creation de valeur n'est pas rempli !")
        }
        else if (document.formulaire.motiv_perso.value=="") {
          alert("Le champ: Motivations n'est pas rempli !")
        }
        else {
          alert("Bien joué le formulaire va être envoyé !! ")
          formulaire.submit();
        }
      }
    </script>
  </body>
</html>
