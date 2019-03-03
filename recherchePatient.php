<?php
if (isset ( $_POST['envoi'])){
	$idconnect = mysqli_connect ( 'localhost', 'root', '', 'cliniques' );
	$nss = $_POST['nss'];
	echo "nss: ".$nss;
	$query = "SELECT * FROM patient ";
	$result = mysqli_query ($idconnect,$query);
	if (mysqli_num_rows($result)!=0){
 		while($row = mysqli_fetch_row($result)){
 			if($row[1]==$nss ){
 				echo "<p>RSS: ".$nss."</p>";
 				echo "<p>Nom: ".$row[2]."</p>";
 				echo "<p>Prénom: ".$row[3]."</p>";
 				echo "<p>Date de Naissance: ".$row[4]."</p>";
 				echo "<p>Téléphone: ".$row[5]."</p>";
 				echo "<p>Adresse mail: ".$row[6]."</p>";
 				echo "<p>Adresse postale: ".$row[7]."</p>";
 				echo "<p>Profession: ".$row[8]."</p>";
 				echo "<p>Situation Familiale: ".$row[9]."</p>";
			}
		}
	}
 	mysqli_close ( $idconnect );
}
if (isset ( $_POST['envoi1'])){
	$idconnect = mysqli_connect ( 'localhost', 'root', '', 'projetbdd14-15' );
	$nom = $_POST['nom'];
	$dateN = $_POST['dateN'];
	//echo "nom: ".$nom." dateN: ".$dateN;
	$query = "SELECT * FROM patient ";
	$result = mysqli_query ($idconnect,$query);
	if (mysqli_num_rows($result)!=0){
 		while($row = mysqli_fetch_row($result)){
 			if($row[2]==$nom && $row[4]==$dateN){
 				echo "<p>RSS: ".$row[1]."</p>";
 				echo "<p>Nom: ".$row[2]."</p>";
 				echo "<p>Prénom: ".$row[3]."</p>";
 				echo "<p>Date de Naissance: ".$row[4]."</p>";
 				echo "<p>Téléphone: ".$row[5]."</p>";
 				echo "<p>Adresse mail: ".$row[6]."</p>";
 				echo "<p>Adresse postale: ".$row[7]."</p>";
 				echo "<p>Profession: ".$row[8]."</p>";
 				echo "<p>Situation Familiale: ".$row[9]."</p>";
 			}
 		}
 	}
 	mysqli_close ( $idconnect );
}
?>