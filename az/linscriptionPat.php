<?php
if(isset($_POST['Envoyer'])){
	$connect = mysqli_connect ( 'localhost', 'root', '', 'projetbdd14-15' ) OR die ('Erreur de connexion');
	$nu=$_POST['numsecu'];
	$n=$_POST['nom'];	
	$p=$_POST['prenom'];
	$na=$_POST['naissance'];
	$t=$_POST['tel'];
	$m=$_POST['email'];
	$po=$_POST['postale'];
	$pr=$_POST['profession'];
	$f=$_POST['familiale'];	
	$query = "INSERT INTO patient VALUES('','$nu','$n','$p','$na','$t','$m','$po','$pr','$f')";
	echo $query;
	$result = mysqli_query ( $connect, $query );
	echo $result;
	if($result){
		echo '<center><div>ajouté patient reussi</div></center>';
	}else{
		echo'<center><div> echec de l\'ajout du patient</div></center>';
	}
	mysqli_close($connect);
}
?>