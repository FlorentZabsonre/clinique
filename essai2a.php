<?php
if (isset($_POST["modifier"])){
		$idconnect=mysqli_connect('localhost','root','','cliniques') 
			OR die ('Erreur de connexion');
echo "ZZZZZ";
		//	$num=$_POST['numsecu'];
			$nom=$_POST['nom'];

			$prenom=$_POST['prenom'];
			$naissance=$_POST['naissance'];

			$tel=$_POST['tel'];
			$ma=$_POST['email'];

			$posta=$_POST['postale'];
			$prof=$_POST['profession'];

			$fam=$_POST['familiale'];

			$result=mysqli_query($idconnect,"UPDATE patient SET 
				
				nom='$nom',prenom='$prenom',naissance='$naissance',tel='$tel',

				mail='$ma',adresse='$posta',profession='$prof',familiale='$fam' 
				WHERE numsecu='$id'");

			//verif now de la presence d'erreur
			if(!$result){
				echo '<center><div id="erreur">Erreur</div></center>';
			}else{
				echo '<center><div>Modification reussi</div></center>';
			}
mysqli_close($idconnect);
}
?>