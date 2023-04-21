<?php
session_start();
if ($_SESSION['user'] != 'user') {
    exit;
} else {
    echo '<div class="actifs">';
    $bdd = new PDO('mysql:host=localhost; dbname=5d; charset=utf8', 'root', 'root');
    $reponse = $bdd->query('SELECT * FROM identifients');
    while ($donnees = $reponse->fetch()) {
        if ($donnees['active'] == 1) {
            echo '<p class="user">' . $donnees['identifients'] . '<img src="css/images/ok.png" class"img_actif"></p>';
        } elseif ($donnees['active'] == 0) {
            echo '<p class="user">' . $donnees['identifients'] . '<img src="css/images/no.png" class="img_actif"></p>';
        }
    }
    echo '</div';
}
?>
