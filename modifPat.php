<?php
if(isset($_POST['Envoyer'])){
	
	$idconnect=mysqli_connect('localhost','root','','cliniques') OR die ('Erreur de connexion');
		//connexion au serveur Mysql et a la bdd clinique
	$numsecu=$_POST['numsecu'];	
	$query="SELECT * FROM patient";
					//selectionne tt le contenu de la table  clients
	//echo $query;
	$result=mysqli_query($idconnect,$query) ;
					//or die ('erreur lors de la reception des donnees des patients');
	
	$condition=false;
	if(!empty($result)){
		while($row = mysqli_fetch_array($result)){
			/*parcours des element receuilli de la table patient
				en fonction ddu num de secu social donné
			*/
				if($row[1]==$numsecu){

					$num=$row[1];
					$nom=$row[2];
					//echo $num;
					$prenom=$row[3];
					$naissance=$row[4];
					//echo $prenom;
					$tel=$row[5];
					$mail=$row[6];

					$postal=$row[7];
					$profession=$row[8];

					$familiale=$row[9];
					$condition=true;

	/*			<!--affichage des donnees d'un patient qui a le numero de
				secu social entré
		-->
	*/	echo'
			<p>
				<label for="numsecu">numero de securité social :</label>
				<input type="text" name="numsecu"   pattern ="[0-9]{15}" maxLength="15"
				value= "'.$numsecu.'" required/>
			</p>
			<p>
				<label for="nom">nom: </label>
				<input type="text" name="nom"  
				value="'.$nom.'" required/>
			</p> 

			<p>
				<label for="prenom">prénom: </label>
				<input type="text" name="prenom" pattern="^[A-Z][a-zA-Zçéàâöè\-_ ]{1\,}" 
				value="'.$prenom.'" required/>
			</p>	 

			<p>
				<label for="naissance">date de naissance :</label>
				<input type="date" name="naissance" 
				value="'.$naissance.'" 
				required/>
			</p>
			<p>
				<label for="tel">numero de telephone:  </label>
				<input type="tel" name="tel"  pattern="^0[1-6][0-9]{8}$"
				value="'.$tel.'" required/>
				<br/>
			</p>

			<p>
				<label for="mail">adresse mail:  </label>
				<input type="email" name="email" id="email" 
				value="'.$mail.'" required/>
			</p>
			<p>
				<label for="adressepost ">adresse postale:   </label>
				<input type="text" name="postale" 
				value="'.$postal.'" 
				required/>
			</p>

			<p>
				<label for="profession ">profession:   </label>
				<input type="text" name="profession"     
				pattern="^[a-z][a-zA-Zçéàâöè\-_ ]{1\,}" 
				value="'.$profession.'"
				required/>
			</p>

			<p>
				<label for="familiale ">situation familiale:   </label>
				<input type="text" name="familiale"   
				pattern="^[a-z][a-zA-Zçéàâöè\-_ ]{1\,}" 
				value="'.$familiale.'" required/>
			</p>
			<center><input type="submit" 
				value="Modifier les infos" name="bouton" /></br></center>';

			}
		}
	}
  	require'modifPatSuite.php';

}
?>