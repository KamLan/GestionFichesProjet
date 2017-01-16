/*
  Script de la page d'ajout de projet
*/
    /*
      Modification du css en fonction du remplissage des champs
    */

      $(document).ready(function(){
        $('.champ').css('borderColor', 'red');
        $('.champ').keyup(function(){
          if($('#testinput').val().length == 0){
            $('#testinput').css('borderColor','red');
          }
          else if($('#testinput').val().length > 0){
            $('#testinput').css('borderColor', '#82BDBB');
          }
        })
        $('.champ').keyup(function(){
          if($('#nom_pil').val().length == 0){
            $('#nom_pil').css('borderColor','red');
          }
          else if($('#nom_pil').val().length > 0){
            $('#nom_pil').css('borderColor', '#82BDBB');
          }
        })
        $('.champ').keyup(function(){
          if($('#email_pil').val().length == 0){
            $('#email_pil').css('borderColor','red');
          }
          else if($('#email_pil').val().length > 0){
            $('#email_pil').css('borderColor', '#82BDBB');
          }
        })
        $('.champ').keyup(function(){
          if($('#tel_pil').val().length == 0){
            $('#tel_pil').css('borderColor','red');
          }
          else if($('#tel_pil').val().length > 0){
            $('#tel_pil').css('borderColor', '#82BDBB');
          }
        })
        $('.champ').keyup(function(){
          if($('#soc_pil').val().length == 0){
            $('#soc_pil').css('borderColor','red');
          }
          else if($('#soc_pil').val().length > 0){
            $('#soc_pil').css('borderColor', '#82BDBB');
          }
        })
        $('.champ').keyup(function(){
          if($('#bu_proj').val().length == 0){
            $('#bu_proj').css('borderColor','red');
          }
          else if($('#bu_proj').val().length > 0){
            $('#bu_proj').css('borderColor', '#82BDBB');
          }
        })
        $('.champ').keyup(function(){
          if($('#name_manag').val().length == 0){
            $('#name_manag').css('borderColor','red');
          }
          else if($('#name_manag').val().length > 0){
            $('#name_manag').css('borderColor', '#82BDBB');
          }
        })
        $('.champ').keyup(function(){
          if($('#ta1').val().length == 0){
            $('#ta1').css('borderColor','red');
          }
          else if($('#ta1').val().length > 0){
            $('#ta1').css('borderColor', '#82BDBB');
          }
        })
        $('.champ').keyup(function(){
          if($('#ta2').val().length == 0){
            $('#ta2').css('borderColor','red');
          }
          else if($('#ta2').val().length > 0){
            $('#ta2').css('borderColor', '#82BDBB');
          }
        })
        $('.champ').keyup(function(){
          if($('#ta3').val().length == 0){
            $('#ta3').css('borderColor','red');
          }
          else if($('#ta3').val().length > 0){
            $('#ta3').css('borderColor', '#82BDBB');
          }
        })
        $('.champ').keyup(function(){
          if($('#ta4').val().length == 0){
            $('#ta4').css('borderColor','red');
          }
          else if($('#ta4').val().length > 0){
            $('#ta4').css('borderColor', '#82BDBB');
          }
        })
        $('.champ').keyup(function(){
          if($('#ta5').val().length == 0){
            $('#ta5').css('borderColor','red');
          }
          else if($('#ta5').val().length > 0){
            $('#ta5').css('borderColor', '#82BDBB');
          }
        })
        $('.champ').keyup(function(){
          if($('#ta6').val().length == 0){
            $('#ta6').css('borderColor','red');
          }
          else if($('#ta6').val().length > 0){
            $('#ta6').css('borderColor', '#82BDBB');
          }
        })
        $('.champ').keyup(function(){
          if($('#ta7').val().length == 0){
            $('#ta7').css('borderColor','red');
          }
          else if($('#ta7').val().length > 0){
            $('#ta7').css('borderColor', '#82BDBB');
          }
        })
        $('.champ').keyup(function(){
          if($('#ta8').val().length == 0){
            $('#ta8').css('borderColor','red');
          }
          else if($('#ta8').val().length > 0){
            $('#ta8').css('borderColor', '#82BDBB');
          }
        })
        $('.champ').keyup(function(){
          if($('#5').val().length == 0){
            $('#5').css('borderColor','red');
          }
          else if($('#5').val().length > 0){
            $('#5').css('borderColor', '#82BDBB');
          }
        })
        $('.champ').keyup(function(){
          if($('#6').val().length == 0){
            $('#6').css('borderColor','red');
          }
          else if($('#6').val().length > 0){
            $('#6').css('borderColor', '#82BDBB');
          }
        })
        $('.champ').keyup(function(){
          if($('#7').val().length == 0){
            $('#7').css('borderColor','red');
          }
          else if($('#7').val().length > 0){
            $('#7').css('borderColor', '#82BDBB');
          }
        })
        $('.champ').keyup(function(){
          if($('#8').val().length == 0){
            $('#8').css('borderColor','red');
          }
          else if($('#8').val().length > 0){
            $('#8').css('borderColor', '#82BDBB');
          }
        })
        $('.champ').keyup(function(){
          if($('#9').val().length == 0){
            $('#9').css('borderColor','red');
          }
          else if($('#9').val().length > 0){
            $('#9').css('borderColor', '#82BDBB');
          }
        })
        $('.champ').keyup(function(){
          if($('#10').val().length == 0){
            $('#10').css('borderColor','red');
          }
          else if($('#10').val().length > 0){
            $('#10').css('borderColor', '#82BDBB');
          }
        })
      });

      /*
        Gestion des différentes parties du formulaire Afficher/Cacher
      */

      $(function (){
        $('div#1').hide();
        $('div#2').hide();
        $('div#3').hide();
        $('div#4').hide();
        $('textarea#5').hide();
        $('textarea#6').hide();
        $('textarea#7').hide();
        $('textarea#textarea8').hide();
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
        $('#cible_e_1').click(function(){
          $('#cible_e_1C').toggle('slow');
          $('#cible_e_1C2').toggle('slow');
        });
        $('#cible_e_2').click(function(){
          $('#cible_e_2C').toggle('slow');
          $('#cible_e_2C2').toggle('slow');
        });
        $('#cible_e_3').click(function(){
          $('#cible_e_3C').toggle('slow');
          $('#cible_e_3C2').toggle('slow');
        });
        $('#cible_c_1').click(function(){
          $('#cible_c_1C').toggle('slow');
          $('#cible_c_1C2').toggle('slow');
        });
        $('#cible_c_2').click(function(){
          $('#cible_c_2C').toggle('slow');
          $('#cible_c_2C2').toggle('slow');
        });
        $('#cible_c_3').click(function(){
          $('#cible_c_3C').toggle('slow');
          $('#cible_c_3C2').toggle('slow');
        });
        $('#cible_i_1').click(function(){
          $('#cible_i_1C').toggle('slow');
          $('#cible_i_1C2').toggle('slow');
        });
        $('#cible_i_2').click(function(){
          $('#cible_i_2C').toggle('slow');
          $('#cible_i_2C2').toggle('slow');
        });
        $('#cible_i_3').click(function(){
          $('#cible_i_3C').toggle('slow');
          $('#cible_i_3C2').toggle('slow');
        });
        $('#cible_i_4').click(function(){
          $('#cible_i_4C').toggle('slow');
          $('#cible_i_4C2').toggle('slow');
        });
         $('#affiche').click(function(){
           $('div#1').show('slow');
           $('#cache').toggle('slow');
           $('#affiche').toggle('slow');
         });

        $('#cache').click(function(){
          $('div#1').hide(1000);
          $('#cache').toggle('slow');
          $('#affiche').toggle('slow');
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
        $('#cible_i_4').click(function(){
          $('textarea#textarea8').toggle('slow');
        });

        /*
          Gestion de la notation
        */


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

      /*
        Gestion du remplissage du formulaire et alertes
      */

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
