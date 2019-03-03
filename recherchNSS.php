<?php
if(isset($_POST['Envoyer5'])){ 


	$idconnect=mysqli_connect('localhost','root','','cliniques') OR die ('Erreur de connexion');

	$nom=$_POST['nom'];

	$naissance=$_POST['naisssance'];
	$trouve=false;
	$query="SELECT numsecu FROM patient WHERE nom='$nom' AND naissance='$naissance' ";
	$result=mysqli_query($idconnect,$query);
	if(!empty($result)){
		if (mysql_num_rows($result)!=0) {
			while ($row = mysql_fetch_row($result)){
				if($row[2]==$nom AND $row[4]==$naissance){
					$numsecu=$row[1];
					$trouve=true;
					echo '<center><div>numero de securite sociale trouvé</div></center>';
				}
			}
			if($trouve==false){
				echo '<center><div>numero de securite sociale pas trouvé</div></center>';
			}
		}
	}
mysqli_close($idconnect);
}
	?>