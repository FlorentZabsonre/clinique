<!DOCTYPE>
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml"/>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Prise de rendez-vous</title>
	<link rel="stylesheet" type="text/css" href="style.css" />

</head>
<body>
	<form id="monform" action="prise_de_rdv.php" method="post" >
	<div class="arriereplan"></div>
	<div id="menu1">
		<div class="logo"><a href="http://www.volkswagen.fr"><img src="VW.jpg"></a></div>
		<div class="Accueil">Accueil</div>
		<div class="LieuxHoraires">Lieux et horaires</div>
		<div class="Tarifs">Tarifs</div>
		<div class="Evenements">Evenements</div>
		<div class="Contact">Contact</div>
		<div class="Connexion"><a class="link" href='Connexion.php'>Connexion</a></div>
	</div>


	<div id="contenu">
<p>
		<label for="numsecu">numero de securité social du patient:</label>
		<input type="text" name="numsecu"    required/>
	</p>
		<p>
		<label for="nom">nom du medecin: </label>
		<input type="text" name="nom" pattern="^[A-Z][a-zA-Zçéàâöè\-_ ]{1,}"
		required/>
	</p> 
		<p>spécialité du medecin:
			<select name="spe">
				<option>cardiologue</option>
				<option>neurologue</option>
				<option>dentiste</option>
				<option>cancerologuue</option>
				<option>ophtamologue</option>
				<option>dermatologue</option
				<option>chirurgien</option>
				<option>généraliste</option>
				<option>radiologue</option>
				<option>anesthésite</option>
				<option>pédiatre</option>

				
			</select>

		</p>

	</div>

		<p>
			<?php include('calnul.php') ?>
			<input type="submit" name="Envoyer1" value="consuler le planning"/>
			<input type="reset" name="annuler" value="annuler"/>
			<?php include('rdv.php') ?>	
			</p>
	</div>

	<footer>Copyright : tous droits réservés.</footer>

</form>
</body>
</html>