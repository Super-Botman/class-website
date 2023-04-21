<?php include("cookie_verif.php") ?>
<!DOCTYPE html>
<html>
<title>messages</title>
<?php include("header.php"); ?>

<body>
  <?php include("menu.php") ?>
  <div class="actifs_messagerie">
    <script src="js/refresh.js"></script>
    <script>actifs_messagerie()</script> 
  </div>
  <div id="messages" class="messages">
    <noscript>
      <p id="message">je vous avez prévenus ! maintenant ca serais cool de le faire ...</p>
    </noscript>
    <script src="js/refresh.js"></script>
    <script>
      messagerie();
    </script>
  </div>

  <div class="form_messagerie">
    <form method="POST" action="messagerie.php">
      <input type="textaera" maxlength="500" name="message" class="message_entré" size="22" placeholder="entrer un message">
      <input id="submit" type="submit" name="envoyé" class="envoi_message_submit">
    </form>
    <?php
    if (isset($_POST['message'])) {
      $message = strip_tags($_POST['message']);
    }
    $user = $_SESSION['user'];
    $bdd = new PDO('mysql:host=localhost; dbname=5d; charset=utf8', 'root', '');
    $colors = $bdd->query('SELECT color FROM identifients WHERE identifients = ' . '\'' . $user . '\'');
    while ($color = $colors->fetch()) {
      $user_color = $color[0];
    }
    if (isset($message)) {
      $req = $bdd->prepare('INSERT INTO messagerie(message,user,color) VALUES(:message, :user , :color)');
      $req->execute(array(
        'message' => $message,
        'user' => $user,
        'color' => $user_color
      ));
    }
    $reponse = $bdd->query('SELECT * FROM messagerie');
    $reponse->closeCursor();
    ?>
  </div>
</body>