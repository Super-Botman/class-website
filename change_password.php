<?php include("cookie_verif.php")?>
<!DOCTYPE html>
<html>
<head>
  <title>changer son mot de passe</title>
  <?php include('header.php');?>
</head>
<body>
  <?php include('menu.php');?>
  <?php
  echo "votre mot de passe actuel est : <strong>" . $_SESSION['password'] ."</strong> et votre identifient est <strong>". $_SESSION['user'] . '</strongn>'
   ?>
  <form action="change_password.php" method="post" enctype="multipart/form-data">
		<p>
			Changer son mot de passe :<br /><br />
      <input id="text" type="password" name="change_password" /><br /><br />
      <input id="text" type="password" name="change_password_verif" /><br /><br />
      <input id="file_submit" type="submit" value="changer de mot de passe" />
		</p>
  </form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  if($_POST['change_password'] == $_POST['change_password_verif']){
    $bdd = new PDO('mysql:host=laclasaismael.mysql.db; dbname=laclasaismael; charset=utf8', 'laclasaismael', 'GYy5y92uPJCCg8U');
    $reponse = $bdd->query('SELECT * FROM identifients');

    while($donnees = $reponse->fetch()){
      $password = htmlspecialchars($_POST['change_password']);
      $user = $_SESSION['user'];
      $bdd->exec('UPDATE identifients SET passwords ='.'\'' .$password .'\''.' WHERE identifients = '. '\''.$user . '\'');
      $_SESSION['password'] = $_POST['change_password'];
      if($donnees['passwords'] == $_POST['change_password']){
        echo "votre mot de passe a été changé !!";
      }
    }
  }else{
    echo "vous n'avez pas taper le memes mot de passe !";
  }
}
?>
