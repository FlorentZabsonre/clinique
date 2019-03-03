<?php
//if(isset($_POST['Envoyer'])){
	$idconnect = mysqli_connect ( 'localhost', 'root', '', 'projetbdd14-15' ) OR die ('Erreur de connexion');;
	$query = "SELECT * FROM acte";
	$result=mysqli_query($idconnect,$query);
	echo '<table><colgroup><col span="1" id="navcol" /><col span="1" id="numcol" /></colgroup><tr><th>ACTES</th><th>PRIC TTC</th></tr>';
	if (mysqli_num_rows($result)!=0){
 		while($row = mysqli_fetch_row($result)){
			$nom = $row[1];
			$prix = $row[2];
			echo '<tr><td>'.$nom.'</td><td>'.$prix.'</td></tr>';
 		}
 	}
 	echo '</table>';
	mysqli_close($idconnect);
//}
?>