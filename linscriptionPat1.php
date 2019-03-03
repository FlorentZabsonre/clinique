<?php
if(isset($_POST['Envoyer'])){
	$connect = mysqli_connect ( 'localhost', 'root', '', 'clinique' ) OR die ('Erreur de connexion');
	$nu=$_POST['numsecu'];
	$n=$_POST['nom'];	
	$p=$_POST['prenom'];
	$na=$_POST['naissance'];
	$t=$_POST['tel'];
	$m=$_POST['email'];
	$po=$_POST['postale'];
	$pr=$_POST['profession'];
	$f=$_POST['familiale'];	
	$query = "insert into patient values ('$nu','$n','$p','$na','$t','$m','$po','$pr','$f')";
	echo $query;
	$result = mysqli_query ( $connect, $query );
	echo $result;
	if($result){
		echo '<center><div>Crée client reussi </div></center>';
	}else{
		echo '<center><div>Erreur, veuillez respecter les paramètres</div></center>';
	}
	mysqli_close($connect);
}
?>