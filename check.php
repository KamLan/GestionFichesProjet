<?php
  include 'bdd.php';

  $reponse_log = $bdd->query('SELECT * FROM Admin');
  // $reponse_username = $bdd->query('SELECT login_user FROM Admin');
  // $reponse_password = $bdd->query('SELECT password_user FROM Admin');
  // $reponse_super = $bdd->query('SELECT super_user FROM Admin');
  // $donnees = $reponse_username->fetch() AND $donnees2 = $reponse_password->fetch()
  while ($donnees = $reponse_log->fetch())
  {
    if (isset($_POST['username']) && isset($_POST['password'])) {
      if ($_POST['username'] == $donnees['login_user'] AND $_POST['password'] == $donnees['password_user'])
      {
        session_start();
        if ($donnees['super_user'] == true) {
          $_SESSION['logged'] = 1;
          $_SESSION['superlogged'] = 1;
          header('location: index.php');
          break;
        }
        else {
          $_SESSION['logged'] = 1;
          header('location: projects.php');
        }
      }
      else{
        header('location:log.php');
      }
    }
    else{
      header('location:log.php');
    }
  }
  $reponse_username->closeCursor();
  $reponse_password->closeCursor();



?>
