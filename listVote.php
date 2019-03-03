<?php
if (isset($_POST['Envoyer'])){
	$iconnect=mysqli_connect('localhost','root','','election') OR DIE ('erreur de connexion');

	$query = "SELECT * FROM candidat ";
	$result=mysqli_query($iconnect,$query);
	if (!empty($result)) {
		while($row = mysqli_fetch_array($result)){
		# code...
			$id=$row[0];
	$numsecu=$row[1];
	$nom=$row[3];
	$prenom=$row[4];
	$prog=$row[5];
	echo '
		<p> <input type="checkbox" name="checkbox[]" value="'.$id.' "> numero de securite social :'.$numsecu.' , nom '.$nom.' , prenom'.$prenom.' ,programme electoral'.$prog.'
		</p>';
		}
	}
