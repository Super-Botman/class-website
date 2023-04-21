<?php
session_start();
$bdd = new PDO('mysql:host=localhost; dbname=5d; charset=utf8', 'root', '');
if($_SESSION['login'] == false){
	$bdd->exec('UPDATE identifients SET active = false WHERE identifients = '.'\''.$_SESSION['user'].'\'');
	header('Location: ../index.php');
	exit();

}else{
	$bdd->exec('UPDATE identifients SET active = true WHERE identifients = '.'\''.$_SESSION['user'].'\'');
}
