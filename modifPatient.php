<!DOCTYPE>
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml"/>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Modifier les informations d'un patient</title>
	<link rel="stylesheet" type="text/css" href="style.css" />

</head>
<body>
	<center>
	<form id="monform" action="essai2.php" method="post" >
		<div class="arriereplan"></div>
		<div id="titre">
			<div class="logo"><a href="http://www.volkswagen.fr"><img src="VW.jpg"></a></div>
			<div class="Accueil">Accueil</div>
			<div class="LieuxHoraires">Lieux et horaires</div>
			<div class="Tarifs">Tarifs</div>
			<div class="Evenements">Evenements</div>
			<div class="Contact">Contact</div>
			<div class="Connexion"><a class="link" href='Connexion.php'>Connexion</a></div>
		</div>
		<div id="contenu" style="">
			<p>
				<label for="numsecu">numero de securité social:</label>
				<input type="text" name="numsecu"  maxLength="15" pattern ="[0-9]{15}"required/>
			</p>
			<!--sachant que le num de secu etant unique -->
			<p>
				<?php require('essai2.php') ?>
				<input type="submit" name="Envoyer" value="modifier les information de ce patient"/>
				<input type="reset" name="annuler" value="annuler"/>
			</p>
		</div>
		<footer>Copyright : tous droits réservés.</footer>
	</form>
	</center>
</body>
</html>