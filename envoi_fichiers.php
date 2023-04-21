<?php include("cookie_verif.php")?>
<!DOCTYPE html>
<html>
<?php include("header.php"); ?>
<body>
	<title>envoyer un fichier</title>
	<?php include("menu.php") ?>
	<form action="envoi_fichiers.php" method="post" enctype="multipart/form-data">
		<p>
			<span class='title'>Envoyer le fichier :</span><br /><br />
			<label for="file" class="label-file">Selectionner mon fichier</label><br />	
      <input class="file" id="file" type="file" name="monfichier" /><br />
      <input id="file_submit" type="submit" value="Publier le fichier" />
		</p>
		<?php
		if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
		{
		        // Testons si le fichier n'est pas trop gros
		        if ($_FILES['monfichier']['size'] <= 1000000)
		        {
		                // Testons si l'extension est autorisée
		                $infosfichier = pathinfo($_FILES['monfichier']['name']);
		                $extension_upload = $infosfichier['extension'];
		                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png','odt','pdf','txt','odf','odx','doc','docx');
		                if (in_array($extension_upload, $extensions_autorisees))
		                {
		                        // On peut valider le fichier et le stocker définitivement
		                        move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));
		                        echo "<span>L'envoi a bien été effectué !</span><br \>";
		                }else
										{
											echo "<p class=\"error_file\">vous n'avez pas le droit d'envoyer ce fichier !</p><br \>";
										}
		        }
		}
		?>
	</form><br />
		<div class="fichiers">
		<p><span class="title">Fichiers à télécharger : </span></p>
		<?php
		$mydir = 'uploads';
		if ($dir = @opendir($mydir))
		{
			while (($file = readdir($dir)) !== false)
			{
				if($file != ".." && $file != ".")
				{
					$filelist[] = $file;
				}
			}
			closedir($dir);
		}
		if(isset($filelist)){
			if(sizeof($filelist) != '0') {
				sort($filelist);
			}
			foreach ($filelist as $key => $val) {
				echo "<a class=\"button_download_file\" href=\"uploads\\".$val."\" download >télécharger le fichier : ".$val."</a><br \><br \>";
			}
		}
		?>
		</div>
</body>
