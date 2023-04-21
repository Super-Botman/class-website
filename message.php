<?php
session_start();
$bdd = new PDO('mysql:host=localhost; dbname=5d; charset=utf8', 'root', '');
$reponse = $bdd->query('SELECT * FROM messagerie');
$first_message = true;
$nb_messages = 0;

if($donnees = $reponse->fetch() == "" AND $first_message = true){
  echo "<p class=\"premier_msg\">Aucun message n'a encore été tapé soit le premier à le faire !!</p>";
  $first_message = false;
}else{
while ($donnees = $reponse->fetch())
{
  $message = "<div class=\"div_message\"><p id=\"autheur\" style=\"color: #".$donnees['color']."\">".$donnees['user']."</p>". "<p id=\"message\">" .  $donnees['message'] . "</p></div><br \>";
  echo $message;
  $_COOKIE['messages_vus'] = $donnees['id'];
  $nb_messages++;
}
if ($nb_messages == 300){
  $bdd->query("TRUNCATE TABLE messagerie");
}
$_COOKIE['messages_non_vus'] += $_COOKIE['messages_vus'];
$_COOKIE['notifications'] = $_COOKIE['messages_non_vus'];


$reponse->closeCursor();
}
?>
