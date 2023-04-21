<?php
/*$bdd = new PDO('mysql:host=localhost', 'root','root');
$notifs = $bdd->query('SELECT notifications FROM 5d.identifients WHERE identifients = \''. $_SESSION['user'] . '\'');
$_COOKIE['notifications'] = $notifs;
$notifs->closeCursor();*/
?>
<div class="onclose">
</div>
<div class="burger">
    <span></span>
</div>
  <div id="menu">
    <ul class="menu">
      <li><a href="envoi_fichiers.php"><span>ENVOYER UN FICHIER</span></a></li>
      <li><a href="messagerie.php"><span>PARLER AVEC LA CLASSE</span></a></li>
      <li id="déroulant"><a href="#"><span>MON PROFIL</span></a>
        <ul class="sous">
          <script>
          </script>
          <li class="sous_li"><a href="deconecte.php"><img src="css/images/deconection.png">se déconecter</a></li>
          <li class="sous_li"><a href="change_password.php"><img src="css/images/password.png">mon mot de passe</a></li>
          <li class="sous_li"><a href="dashboard.php"><img src="css/images/profil_user.png">profil</a></li>
        </ul>
      </li>
    </ul>
  </div>
