<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Language" content="fr" />
<title>Inscription du patient</title>
<link rel="stylesheet" type="text/css" href="0Accueil.css" />
<link rel="shortcut icon" type="image/x-icon" href="VW.ico" />

</head>
<body>
	<div class="arriereplan"></div>
	<div id="titre">
		<div class="logo"><a href="http://www.volkswagen.fr"><img src="VW.jpg"></a></div>
		<div class="Accueil"><a class="link" href='Accueil.php'>Accueil</a></div>
		<div class="LieuxHoraires">Lieux et horaires</div>
		<div class="Tarifs"><a class="link" href='pageActes.php'>Tarifs</a></div>
		<div class="Evenements">Evenements</div>
		<div class="Contact">Contact</div>
		<div class="deconnexion"><a class="link" href="Accueil.php">Déconnexion</a></div>
	</div>
	<div id="contenu" style="">
		<form method="post" action="inscriptionPatient.php">
			<p>
			1 <label for="numsecu">numero de securité social</label>
			<input type="text" name="numsecu"   pattern ="[0-9]{15}"required/>
			</p>
			<p>
				2 <label for="nom">nom: </label>
				<input type="text" name="nom" pattern="^[A-Z][a-zA-Zçéàâöè\-_ ]{1,}"required/>
			</p> 
			<p>
				3 <label for="prenom">prénom: </label>
				<input type="text" name="prenom" pattern="^[A-Z][a-zA-Zçéàâöè\-_ ]{1,}"required/>
			</p>	 
			<p>
				4 <label for="naissance">date de naissance: </label>
				<input type="date" name="naissance" required/>
			</p>
			<p>
				5 <label for="tel">numero de telephone: </label>
				<input type="tel" name="tel"  pattern="^0[1-6][0-9]{8}$" required/>
			</p>
			<p>
				6 <label for="mail">adresse mail: </label>
				<input type="email" name="email" id="email" placeholder="Ex : jean.dupont@mail.com" required/>
			</p>
			<p>
				7 <label for="adressepost ">adresse postale: </label>
				<input type="text" name="postale" placeholder="Ex : 123 rue François de Paris"required/>
			
			</p>
			<p>
				8 <label for="profession ">profession: </label>
				<input type="text" name="profession"   placeholder="Ex : professeur" pattern="^[a-z][a-zA-Zçéàâöè\-_ ]{1,}" required/>	
			</p>
			<p>
				9 <label for="familiale ">situation familiale: </label>
				<input type="text" name="familiale" pattern="^[a-z][a-zA-Zçéàâöè\-_ ]{1,}" required/>
			</p>
			<p>
				<?php include('linscriptionPat.php') ?>
				<input type="submit" name="Envoyer" value="Ajouter un patient"/>
				<input type="reset" name="annuler" value="annuler"/>
			</p>
		</form>
	</div>
	<div class="précedent"><a class="link" href="Agent.php">... précedent</a></div>
	<footer>Copyright : tous droits réservés.</footer>
</body>
</html>