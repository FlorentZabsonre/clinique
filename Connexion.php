<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Language" content="fr" />
<title>Authentification</title>
<link rel="stylesheet" type="text/css" href="Accueil.css" />
<link rel="shortcut icon" type="image/x-icon" href="VW.ico" />
<body>
<form method="post" action="" method="post">
	<div id="main">

		<div id="titre">
			<div class="logo"><img src="logo.png"></div>
			<div class="Accueil"><a class"lin" href="pageAcceuil.php">Accueil</a></div>
			<div class="actes"><a class="link" href='pageActes.php'>Actes</a></div>
			<div class="Connexion"><a class="link" href='Connexion.php'>Connexion</a></div>
		</div>

		<div id="menup" style="clear:both">
			<br>
			<br>
			<a href="inscriptionPatient.php">inscrire un patient</a><br/>
			<br>
			<a href="RechercheClient.php">rechercher un patient</a><br/>
			<br>
			<a href="modifPatient.php">modifier les informations d'un patient </a><br/>
			<br>
			<a href="pageSynthesePatient.php">synthèse d'un patient</a><br/>
			<br>
			<a href="priseRdv.php">prendre un rendez-vous</a><br/>
			<br>
			<a href="payement.php">effectuer un payement</a><br/>
			<br>
		</div>


		<div id="contenu">
			
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
	
		</div>
	</div>
	</form>
		<footer>Copyright : tous droits réservés.</footer>

</body>
</html>