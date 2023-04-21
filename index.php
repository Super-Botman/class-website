<?php
session_start();
setcookie('notifications', 0, time() + 365 * 24 * 3600, (string)null, (string)null, false, true);
setcookie('login', false, time() + 365 * 24 * 3600, (string)null, (string)null, false, true);
setcookie('theme', 'dark', time() + 365 * 24 * 3600, (string)null, (string)null, false, true);
setcookie('messages_vus', 0, time() + 365 * 24 * 3600, (string)null, (string)null, false, true);
setcookie('messages_non_vus', 0, time() + 365 * 24 * 3600, (string)null, (string)null, false, true);
?>
<!DOCTYPE html>
<html lang="fr">
<title>accueil|classe 5D</title>
<?php include("header.php"); ?>

<body>
  <noscript>pour le bon fonctionnement du site veuillez activer le javascript sur votre naviguateur</noscript>
  <div id="body">
    <form method="post" action="index.php">
      <p>Nom : </p> <input name="name" id="Name" /><br />
      <p>Mot de passe : </p> <input type="password" name="password" id="Password" /><br /><br />
      <input type="checkbox" name="connect_open" id="case" id="connecter" /><label for="case" id="connecter"> rester connecter</label><br /><br />
      <input id="submit" type="submit" value="Se connecter" /><br /><br />
    </form>
  </div>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $bdd = new PDO('mysql:host=localhost; dbname=5d; charset=utf8', 'root', '');
  $reponse = $bdd->query('SELECT * FROM identifients');
  while ($donnees = $reponse->fetch()) {
    if ($_POST['name'] == $donnees['identifients'] and $donnees['passwords'] == $_POST['password']) {
      if ($_POST['connect_open'] == 1) {
        setcookie('login', 'true', time() + 365 * 24 * 3600, null, null, false, true);
      }
      $_SESSION['login'] = "true";
      $_SESSION['user'] = $_POST['name'];
      $_SESSION['password'] = $_POST['password'];
      $bdd->exec('UPDATE identifients SET active = true WHERE identifients = '.'\''.$_SESSION['user'].'\'');
      header('Location: messagerie.php');
    }
  }
  $reponse->closeCursor();
}
?>