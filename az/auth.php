<?php
if (isset ( $_POST['envoi'])){
	$idconnect = mysqli_connect ( 'localhost', 'root', '', 'cliniques' );
	$personne = $_POST['Identifiant'];
	$mdp = $_POST['mdp'];
	echo "id: ".$personne." mdp: ".$mdp;
	$query = "SELECT * FROM personnel ";
	$result = mysqli_query ($idconnect,$query);
	echo "id: ".$personne." mdp:".$mdp;
	if (mysqli_num_rows($result)!=0){
 		while($row = mysqli_fetch_row($result)){
 			echo "id: ".$row[1]." mdp:".$row[3];
 			if($row[1]==$personne && $row[3]==$mdp){
 				if ($row[4] == 'Directeur') {
						header ( "location:./Directeur.php" );
				} elseif ($row[4] == 'Medecin') {
						header ( "location:./Médecin.php" );
				} elseif ($row[4] == 'Agent') {
						header ( "location:./Agent.php" );
				}
 			}else{
 				echo "Erreur dans id et/ou mdp";
 			}
 		}
 	}
 	mysqli_close ( $idconnect );
}
?>