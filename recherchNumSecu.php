<!DOCTYPE>
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml"/>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Modifier les informations d'un patient</title>
	<link rel="stylesheet" type="text/css" href="style.css" />

</head>
<body>
	<form id="monform" action="recherchNumSecu.php" method="post" >
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
				<label for="nom">nom: </label>
				<input type="text" name="nom" pattern="^[A-Z][a-zA-Zçéàâöè\-_ ]{1,}"
				required/>
			</p>	 
			<p>
				<label for="naissance">date de naissance :</label>
				<input type="date" name="naissance" required/>
			</p>
			<!--sachant que le num de secu etant unique -->
			<p>
				<?php include('recherchNSS.php') ?>
				<input type="submit" name="Envoyer" value="modifier les information de ce patient"/>
				<input type="reset" name="annuler" value="annuler"/>
			</p>
		</div>
		<footer>Copyright : tous droits réservés.</footer>
	</form>
</body>
</html>