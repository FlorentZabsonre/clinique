<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Language" content="fr" />
<title>Synthèse du patient</title>
<link rel="stylesheet" type="text/css" href="Accueil.css" />
<link rel="shortcut icon" type="image/x-icon" href="VW.ico" />

</head>
<body>
<form id="monform" action="pageSynthesePatient.php" method="post" >
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
			<a href="synthese.php">synthèse d'un patient</a><br/>
			<br>
			<a href="priseRdv.php">prendre un rendez-vous</a><br/>
			<br>
			<a href="pagePayementPatient.php">effectuer un payement</a><br/>
			<br>
			<div class="précedent"><a class="link" href="pageAgent.php">... précedent</a></div>
			<br>
		</div>


		<div id="contenu">
			<<form>
		<fieldset>
				<legend>Recherche de Patient à partir de son Numéro de Sécurité Sociale</legend>
				<p>
					<label for="nss">Numéro de Sécurité Sociale: </label>&nbsp;
						<input type="text" name="nss" id="nss" value="" size="30" /><br />
				</p>
				<p>
					<label for="a">&nbsp;</label>
						<input type="submit" name="envoi" value="Rechercher" />
						<input type="reset" value="Tout effacer" />
				</p>
			</fieldset>
		</form>
		<form method="post" action="">
			<fieldset>
				<legend>Recherche de Patient à partir de son Nom et Date de Naissance</legend>
				<p>
					<label for="nom">Nom: </label>&nbsp;
						<input type="text" name="nom" id="nom" value="" size="30" /><br />
				</p>
				<p>
					<label for="dateN">Date de Naissance: </label>&nbsp;
						<input type="date" name="dateN" id="dateN" value="" size="30" /><br />
				</p>
					<label for="a">&nbsp;</label>
						<input type="submit" name="envoi1" value="Rechercher" />
						<input type="reset" value="Tout effacer" />
				</p>
			</fieldset>
	</div>	
	</form>
	<?php include('recherchePatient.php') ?>			

		<footer>Copyright : tous droits réservés.</footer>
	
</body>
</html>