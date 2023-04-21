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
			echo "<br \><br \><a class=\"dashboard_button_download_file\" href=\"uploads\\".$val."\" download >télécharger le fichier : ".$val."</a>";
		}
	}
?>
