<?php
	echo '<p><label for="nomMedic">Nom du médecin: </label>';
	$idconnect = mysqli_connect ( 'localhost', 'root', '', 'projetbdd14-15' );
	$query = "SELECT * FROM personnel ";
	$result = mysqli_query ($idconnect,$query);
	echo '<select name="nomMedic">';
	if (mysqli_num_rows($result)!=0){
		echo'<option value="_" selected="selected"></option>';
 		while($row = mysqli_fetch_row($result)){
 			if($row[4]=="Medecin"){
 				echo'<option value="'.$row[1].'">'.$row[1].' - '.$row[5].'</option>';
 			}
 		}
 	}
 	echo '</select></p>';
 	mysqli_close ($idconnect);
?>