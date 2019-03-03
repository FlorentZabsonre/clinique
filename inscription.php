<?php
if (isset($_POST['Envoyer'])){
	$iconnect=mysqli_connect('localhost','root','','cliniques') OR DIE ('erreur de connexion');

	$num=$_POST['numsecu'];
	$n=$_POST['nom'];

	$p=$_POST['prenom'];
	$naissance=$_POST['naissance'];

	$tel=$_POST['tel'];
	$ma=$_POST['email'];

	$posta=$_POST['postale'];
	$prof=$_POST['profession'];

	$fam=$_POST['familiale'];

	$query="INSERT INTO patient VALUES('','$num','$n','$p','$naissance',
		'$tel','$ma','$posta','$prof','$fam')";

		$rep=mysqli_query($iconnect, $query);
		
	if ($rep){
		echo '<center><div>ajouté patient reussi</div></center>';
	}else{
		echo'<center><div> echec de l\'ajout du patient</div></center>';
	}

	mysqli_close($iconnect);
}
?>