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
	<form method="post" action="">
		<fieldset>
			<legend>Ajouter un Employé</legend>
			<p>
				<label for="nom">Nom :</label>&nbsp;
					<input type="text" name="nom" id="nom" value="" size="30" /><br />
			</p>
			<p>
				<label for="Prénom">Prénom :</label>&nbsp;
					<input type="text" name="prenom" id="Prénom" value="" size="30" /><br />
			</p>
			<p>
				<label for="mdp">Mot de passe :</label>&nbsp;
					<input type="text" name="mdp" id="mdp" value="" size="30" /><br />
			</p>
			<p>
				<label for="rang">Rang:</label>
				<select name="rang">
					<option value="Agent" selected="selected">Agent</option>
					<option value="Medecin">Médecin</option>
					<option value="Directeur">Directeur</option>*
				</select>
			</p>
				<label for="a">&nbsp;</label>
					<input type="submit" name="envoi1" value="Ajouter Employé" />
					<input type="reset" value="Tout effacer" />
			</p>
		</fieldset>
	</form>
	<form method="post" action="pageEmploye.php">
		<fieldset>
			<legend>Afficher tous les employés</legend>
			<p>
				<label for="a"> &nbsp;</label>	
				<input type="submit" name="envoi2"  value="Afficher les employés" />		
			</p>	
		</fieldset>
	</form>
	<?php include('Employes.php') ?>
	<div class="précedent"><a class="link" href="Directeur.php">... précedent</a>
	</div>
</body>
</html>