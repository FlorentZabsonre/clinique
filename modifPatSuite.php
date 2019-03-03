<?php
if (isset($_POST['Envoyer'])) { 		
	$idconnect=mysqli_connect('localhost','root','','cliniques') OR die ('Erreur de connexion');
	$id=$_POST['numsecu'];
	$query = "SELECT * FROM patient where numsecu='$id' ";
	$result = mysqli_query ($idconnect,$query);
	while($row = mysqli_fetch_row($result)){
?>	

		<p>COUCOUCOU</p>;
	<center><form action="essai2.php" method="post">
			<h1>Modification des informations </h1>
	<!--	<p>
			<label for="numsecu">numero de securité social :</label>
			<input type="text" name="numsecu"   maxLength="15"
			value= "<?php echo $row[1]?>" required/>
		</p>
		-->
		<p>
			<label for="nom">nom: </label>
			<input type="text" name="nom"  
			value="<?php echo $row[2]?>" required/>
		</p> 
		<p>
			<label for="prenom">prenom: </label>
			<input type="text" name="prenom"  
			value="<?php echo $row[3]?>" required/>
		</p>	 
		<p>
			<label for="naissance">date de naissance :</label>
			<input type="date" name="naissance" 
			value="<?php echo $row[4]?>" 
			required/>
		</p>
		<p>
			<label for="tel">numero de telephone:  </label>
			<input type="tel" name="tel"  
			value="<?php echo $row[5]?>" required/>
			<br/>
		</p>
		<p>
			<label for="mail">adresse mail:  </label>
			<input type="email" name="email" id="email" 
			value="<?php echo $row[6]?>" required/>
		</p>
		<p>
			<label for="adressepost ">adresse postale:   </label>
			<input type="text" name="postale" 
			value="<?php echo $row[7]?>" 
			required/>
		</p>
		<p>
			<label for="profession ">profession:   </label>
			<input type="text" name="profession"     
		 
			value="<?php echo $row[8]?>"
			required/>
		</p>
		<p>
			<label for="familiale ">situation familiale:   </label>
			<input type="text" name="familiale"   
			 
			value="<?php echo $row[9]?>" required/>
		</p>
		<center><input type="submit" 
			value="Modifier les infos" name="modifier" /></form></center>';
 <?php

  		}//fermeture du while
  		include 'essai2a.php';
	mysqli_close($idconnect);
}//fermeture du 1er isset
?>

	
