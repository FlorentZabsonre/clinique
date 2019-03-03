<!DOCTYPE>
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml"/>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Inscription du patient</title>
	<link rel="stylesheet" type="text/css" href="Accueil.css" />

</head>
<body>
	<form id="monform" action="inscriptionPatient.php" method="post" >
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
			
				<center><fieldset>
			<legend>Inscription du patient</legend>
			<p>
		<label for="numsecu">numero de securité social :</label>
		<input type="text" name="numsecu"   pattern ="[0-9]{15}" maxLength="15" required/>
	</p>
	<p>
		<label for="nom">nom: </label>
		<input type="text" name="nom" pattern="^[A-Z][a-zA-Zçéàâöè\-_ ]{1,}"
		required/>
	</p> 

	<p>
		<label for="prenom">prénom: </label>
		<input type="text" name="prenom" pattern="^[A-Z][a-zA-Zçéàâöè\-_ ]{1,}"
		required/>
		
		<p>
			<label for="naissance">date de naissance: </label>
			<input type="date" name="naissance"placeholder="AAAA/MM/JJ" required/>
		</p>



		<p>
			<label for="tel">numero de telephone:  </label>
			<input type="tel" name="tel"  pattern="^0[1-6][0-9]{8}$" required/>
			<br/>
		</p>

		<p>
			<label for="mail">adresse mail:  </label>
			<input type="email" name="email"  placeholder="Ex : jean.dupont@mail.com"  required/>
		</p>
		<p>
			<label for="adressepost ">adresse postale:   </label>
			<input type="text" name="postale" placeholder="Ex : 123 rue François de Paris"
			required/>

		</p>
		<p>
			<label for="profession ">profession:   </label>
			<input type="text" name="profession"   placeholder="Ex : professeur"   
			pattern="^[a-z][a-zA-Zçéàâöè\-_ ]{1,}" required/>

		</p>
		<p>situation familiale:
			<select id="familiale">
			<option>celibataire</option>
			<option>marie(e)</option>
			<option>veuf(veuve)</option>
		</select>

		</p>

		<p>
			<?php include('inscription.php') ?>
			<input type="submit" name="Envoyer" value="Ajouter un patient"/>
			<input type="reset" name="annuler" value="Annuler  l'ajout "/>

		</fieldset></center>
	
		</div>

	<footer>Copyright : tous droits réservés.</footer>

</form>
</body>
</html>