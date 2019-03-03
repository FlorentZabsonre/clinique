<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Language" content="fr" />
<title>Authentification</title>
<link rel="stylesheet" type="text/css" href="0EXO.css" />
<link rel="shortcut icon" type="image/x-icon" href="VW.ico" />
<body>
	<form method="post" action="">
		<fieldset>
			<legend>Identification</legend>
			<p>
				<label for="iden">Identifiant : </label>&nbsp;
					<input type="text" name="Identifiant" id="Identifiant" value="" size="30" /><br />
			</p>
			<p>
				<label for="msg">Mot de passe : </label>&nbsp;
					<input type="text" name="mdp" id="mdp" value="" size="30" /><br />
			</p>
			<p>
				<label for="a">&nbsp;</label>
					<input type="submit" name="envoi" value="Envoyer" />
					<input type="reset" value="Tout effacer" />
			</p>
		</fieldset>
	</form>
	<?php include('auth.php') ?>
</body>
</html>