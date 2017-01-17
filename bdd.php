<?php

try {
  $bdd = new PDO('mysql:host=localhost;dbname=AdeccoFiche;charset=utf8', 'root', '');

} catch (Exception $e) {
  die('Erreur : '.$e->getMessage());
}

?>

<?php
// $dsn='mysql:host=camilleaolcam.mysql.db;dbname=camilleaolcam';
// $username="camilleaolcam";
// $password="nB42MHCxbEUZ";
//
// try {
//   $bdd = new PDO($dsn,$username,$password);
//
// } catch (Exception $e) {
//   die('Erreur : '.$e->getMessage());
// }

?>
