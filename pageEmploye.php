<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Language" content="fr" />
<title>Page Employés</title>
<link rel="stylesheet" type="text/css" href="0EXO.css" />
<link rel="shortcut icon" type="image/x-icon" href="VW.ico" />
</head>
<body>
	<form method="post" action="pageEmploye.php">
		<fieldset>
			<legend>Afficher tous les employés</legend>
			<p>
				<label for="a"> &nbsp;</label>	
				<input type="submit" name="envoi3"  value="Afficher les employés" />		
			</p>	
		</fieldset>
	</form>
	<?php include('rechercheTousEmployes.php') ?>
</body>
</html>