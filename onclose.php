<?php
session_start();
$bdd = new PDO('mysql:host=laclasaismael.mysql.db; dbname=laclasaismael; charset=utf8', 'laclasaismael', 'GYy5y92uPJCCg8U');
$bdd->exec('UPDATE identifients SET active =\'0\' WHERE identifients = '.'\''.$_SESSION['user'].'\'');
?>

