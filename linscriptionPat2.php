<?php
if(isset($_POST['Envoyer'])){
	echo "sssss";
	$idconnect=mysqli_connect('localhost','root','','clinique') OR die ('Erreur de connexion');
		//connexion au serveur Mysql et a la bdd clinique
	$numsecu=$_POST['numsecu'];
	$nom=$_POST['nom'];
	
	$prenom=$_POST['prenom'];
	$naissance=$_POST['naissance'];
	
	$tel=$_POST['tel'];
	$mail=$_POST['email'];

	$postal=$_POST['postale'];
	$profession=$_POST['profession'];

	$familiale=$_POST['familiale'];

	$query= "insert into patient values ('$numsecu' , '$nom' , '$prenom' ,'$naissance', '$tel','$mail','$postal','$profession','$familiale')";
echo "$query";
	$result=mysqli_query($idconnect,$query);

	if($result){
		echo '<center><div>Crée patient reussi </div></center>';
	}else{
		echo '<center><div>Erreur, veuillez réspecter les paramètres</div></center>';
	}
	mysqli_close($idconnect);

}
?>