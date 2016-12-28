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
      <form class="" name="formulaire" action="inserttask.php" method="post">
        <h3>
          Projet
          <img src="img/eye.png" alt="" id="affiche" />
          <img src="img/eyenone.png" alt="" id="cache" />
        </h3>
        <div class="" id="1">
          <input type="text" name="titre_proj" placeholder="Titre projet" value=""> <br>
          date demande :<input type="date" name="date_proj" value="">
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
        </div>
        <h3>
          Description
          <img src="img/eye.png" alt="" id="affiche2" />
          <img src="img/eyenone.png" alt="" id="cache2" />
        </h3>
        <div class="" id="2">
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
        </div>
        <h3>
          Délai
          <img src="img/eye.png" alt="" id="affiche3" />
          <img src="img/eyenone.png" alt="" id="cache3" />
        </h3>
        <div class="" id="3">
          date mise à disposition pour déploiement<input type="date" name="date_dispodeploi" value="">
          <h3>
            Facteurs clés de succès
          </h3>
          <textarea name="facteur_succ" rows="8" cols="40" placeholder="Qu'est-ce qui vous paraît incontournable dans le déploiement pour la réussite du projet ?"></textarea>
          <h3>
            Porteurs de l'offre
          </h3>
          <textarea name="port_offre" rows="8" cols="40" placeholder="Qui va porter cette offre au sein de nos réseaux - identifier les fonctions clés"></textarea>
          <h3>
            Canal de déploiement
          </h3>
          Ligne managériale <br>
          <input type="radio" name="lm" value="oui">Oui
          <input type="radio" name="lm" value="non">Non <br>
          Pédagogie en réunion de zone <br>
          <input type="radio" name="Peda" value="oui">Oui
          <input type="radio" name="Peda" value="non">Non <br>
          Rituel existant pour lancer le projet <br>
          <input type="radio" name="Rituel" value="oui" id="affichetext1">Oui <br>
          <textarea name="R_y_text" rows="8" cols="40" placeholder="Préciser (ex: réunions DZ, calls hebdo, autre, ...)" id="5"></textarea> <br>
          <input type="radio" name="Rituel" value="non" id="affichetext2">Non <br>
          <textarea name="R_n_text" rows="8" cols="40" placeholder="Pourquoi ?" id="6"></textarea> <br>
          <h3>
            Professionalisation
          </h3>
          Appropriation à prévoir <br>
          <input type="radio" name="Aprop" value="oui" id="affichetext3">Oui
          <input type="radio" name="Aprop" value="préconisé" id="affichetext4">Préconisé
          <input type="radio" name="Aprop" value="non" id="cachertext3">Non <br><br>
          <textarea name="A_ym_text" rows="8" cols="40" placeholder="Préciser le mode d'appropriation" id="7"></textarea> <br>
          <textarea name="rel_prof" rows="8" cols="40" Placeholder="Préciser (ex: RESZ, RVZ, Ingénieurs formation, ...)"></textarea>
          <h3>
            Diffusion des supports
          </h3>
          Essentiel <br>
          <input type="radio" name="Ess" value="oui">Oui
          <input type="radio" name="Ess" value="non">Non <br>
          Intranet BU <br>
          <input type="radio" name="Intra" value="oui">Oui
          <input type="radio" name="Intra" value="non">Non <br>
          Digital <br>
          <input type="checkbox" name="dig_si" value="">Site internet BU
          <input type="checkbox" name="dig_rs" value="">Réseaux sociaux BU <br>
          Autre <br>
          <textarea name="autre_diff" rows="8" cols="40" placeholder="Préciser"></textarea>
        </div>
        <h3>
          En synthèse : Votre vision du projet
          <img src="img/eye.png" alt="" id="affiche4" />
          <img src="img/eyenone.png" alt="" id="cache4" />
        </h3>
        <div class="" id="4">
          Effort d'implémentation
          <input type="radio" name="eff" value="1">
          <input type="radio" name="eff" value="2">
          <input type="radio" name="eff" value="3">
          <input type="radio" name="eff" value="4">
          <input type="radio" name="eff" value="5"> <br>
          Différencation vs concurrence
          <input type="radio" name="diff" value="1">
          <input type="radio" name="diff" value="2">
          <input type="radio" name="diff" value="3">
          <input type="radio" name="diff" value="4">
          <input type="radio" name="diff" value="5"> <br>
          Temps nécessaire déploiement
          <input type="radio" name="time" value="1">
          <input type="radio" name="time" value="2">
          <input type="radio" name="time" value="3">
          <input type="radio" name="time" value="4">
          <input type="radio" name="time" value="5"> <br>
          Facilité de mesure d'impact
          <input type="radio" name="fac" value="1">
          <input type="radio" name="fac" value="2">
          <input type="radio" name="fac" value="3">
          <input type="radio" name="fac" value="4">
          <input type="radio" name="fac" value="5"> <br>
          Création de valeur / impact business
          <input type="radio" name="crea" value="1">
          <input type="radio" name="crea" value="2">
          <input type="radio" name="crea" value="3">
          <input type="radio" name="crea" value="4">
          <input type="radio" name="crea" value="5"> <br> <br>
          <textarea name="motiv_perso" rows="8" cols="40" placeholder="Pourquoi vous y tenez - vos motivations à mener à bien ce projet personnellement"></textarea> <br>
        </div> <br>
        <input type="button" name="name" value="Valider" class="submit" onclick="Verif_form(this.form)">
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
        $('#affiche').click(function(){
          $('div#1').show('slow');
        });
        $('#cache').click(function(){
          $('div#1').hide(1000);
        })
        $('#affiche2').click(function(){
          $('div#2').show('slow');
        });
        $('#cache2').click(function(){
          $('div#2').hide(1000);
        })
        $('#affiche3').click(function(){
          $('div#3').show('slow');
        });
        $('#cache3').click(function(){
          $('div#3').hide(1000);
        })
        $('#affiche4').click(function(){
          $('div#4').show('slow');
        });
        $('#cache4').click(function(){
          $('div#4').hide(1000);
        })
        $('#affichetext1').click(function(){
          $('textarea#5').show('slow');
          $('textarea#6').hide(1000);
        })
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
      });

      function Verif_form(formulaire){
        if (document.formulaire.titre_proj.value=="") {
          alert("Le champ: titre du projet n'est pas rempli !")
        }
        else if (document.formulaire.date_proj.value=="") {
          alert("Le champ: date du projet n'est pas rempli !")
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
