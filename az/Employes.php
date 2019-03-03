<?php
if (isset ( $_POST['envoi1'] )) {
	$idconnect = mysqli_connect ( 'localhost', 'root', '', 'projetbdd14-15' );
	$N = $_POST['nom'];
	$P = $_POST['prenom'];
	$M = $_POST['mdp'];
	$R = $_POST['rang'];
	$query = "insert into personnel values ('','$N','$P','$M','$R')";
	echo $query;
	$result = mysqli_query ($idconnect,$query);
	echo $result;
	if (!$result) {
		echo "Recommencer!";
	}
	mysqli_close ($idconnect);
}
if ( isset ( $_POST['envoi2'] )) {
	$idconnect = mysqli_connect ( 'localhost', 'root', '', 'projetbdd14-15' );
	$query = "SELECT * FROM personnel";
	$result = mysqli_query ($idconnect,$query);
	echo '<form method="post" action=""><fieldset><legend>Liste des Employés</legend>';
	if (mysqli_num_rows($result)!=0){
 		while($row = mysqli_fetch_row($result)){
 			$id = $row[0];
			$nom = $row[1];
			$prenom = $row[2];
			$mdp = $row[3];
			$rang = $row[4];
 			echo '<p><label for="b"><input type="checkbox" name="EmployésASuppr[]" value="'.$id.'">Employé numéro '.$id.':</label><input type="text" readonly="readonly" value="'.$nom.' '.$prenom.' '.$mdp.' '.$rang.'"size="30" /></p>' ;
		}
		echo '<label for="a">&nbsp;</label><input type="submit" name="suppr" value="Supprimer Employé(s)" />';
	}else{
		echo "Pas d'employés' dans la base de données!";
	}
	echo '<?php include('."rechercheTousClient.php".') ?>';
	echo '</fieldset></form>';
	mysqli_close ($idconnect);
}
/*if ( isset ( $_POST['suppr'] )) {
	$idconnect = mysqli_connect ( 'localhost', 'root', '', 'exo' );
	$query = "SELECT id FROM client";
	$result = mysqli_query ($idconnect,$query);
	$ids = implode(",",$_POST["clientASuppr"]);
	for($i=0,$n=count($_POST["clientASuppr"]);$i<$n;$i++){
		$query = "DELETE FROM client where id IN ($ids)";
	}
	$result = mysqli_query ($idconnect,$query);
	echo '<form><fieldset><legend>Liste des clients</legend>';
	$query = "SELECT * FROM client";
	$result = mysqli_query ($idconnect,$query);
	if (mysqli_num_rows($result)!=0){
 		while($row = mysqli_fetch_row($result)){
 			$id = $row[0];
			$nom = $row[1];
			$prenom = $row[2];
			$Date = $row[3];
			$Telephone = $row[4];
 			echo '<p><label for="b"><input type="checkbox" id="'.$id.'">Client numéro '.$id.':</label><input type="text" readonly="readonly" value="'.$nom.' '.$prenom.' née le '.$Date.' et joignable sur le '.$Telephone.'"size="30" /></p>' ;
		}
		echo '<label for="a">&nbsp;</label><input type="submit" name="suppr" value="Supprimer Client" />';
	}else{
		echo "Pas de clients dans la base de données!";
	}
	echo '</fieldset></form>';
	mysqli_close ($idconnect);
}*/
?>