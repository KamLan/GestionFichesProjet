<?php

try {
  $bdd = new PDO('mysql:host=localhost;dbname=AdeccoFiche;charset=utf8', 'root', '');

} catch (Exception $e) {
  die('Erreur : '.$e->getMessage());
}

?>

<?php
//$dsn='mysql:host=51.254.113.91;dbname=fichesadecco';
//$username="root";
//$password="PxIMUrqLmn89";

//try {
//  $bdd = new PDO($dsn,$username,$password);

//} catch (Exception $e) {
//  die('Erreur : '.$e->getMessage());
//}

?>
