<?php
  session_start();
  session_destroy();
  $bdd = new PDO('mysql:host=localhost; dbname=5d; charset=utf8', 'root', '');
  $bdd->exec('UPDATE identifients SET active =\'0\' WHERE identifients = '.'\''.$_SESSION['user'].'\'');
  setcookie('login', 'false' , time() + 365*24*3600, null, null, false, true);
	header('Location: index.php');
