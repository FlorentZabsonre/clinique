<?php
if(isset($_POST['Envoyer'])){
	
	$idconnect=mysqli_connect('localhost','root','','clinique') OR die ('Erreur de connexion');
		//connexion au serveur Mysql et a la bdd clinique
	$numsecu=$_POST['numsecu'];
	$query="DELETE FROM patient WHERE numsecu='$numsecu'";
					//selectionne tt le contenu de la table  clients

	$result=mysqli_query($idconnect,$query);

		if($result){
			echo '<center><div>suppresion reussi </div></center>';
		}else{
			echo '<center><div>Erreur, veuillez réspecter les paramètres</div></center>';
		}
		mysqli_close($idconnect);
	}
	?>