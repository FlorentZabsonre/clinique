<?php
		if (isset($_POST['Envoyer'])) { 		
			//echo'sssss';
			$idconnect=mysqli_connect('localhost','root','','cliniques') 
			OR die ('Erreur de connexion');
			$query = "SELECT * FROM patient ";
			$result = mysqli_query($idconnect,$query);
			$id=$_POST['numsecu'];
			$condition=false;
			if(!empty($result)){				
				if (mysqli_num_rows($result)!=0){			
					echo "1111111";
					while ($row = mysqli_fetch_row($result)){			
						if($id==$row[1]){
							//echo $id;
							$condition=true;
						}
					}
				}
			}
			if($condition==false){

			echo' <div id="erreur">
				id n\'existe pas
				</div>';
			}if($condition==true){
			
			//$query = "SELECT * FROM patient ";
			echo $query;
			//$result = mysqli_query($idconnect,$query);
			$id=$_POST['numsecu'];
			$condition=false;
			if(!empty($result)){		
			
				//if (mysqli_num_rows($result)!=0){	
				echo"22222222";
					while ($row = mysqli_fetch_row($result)){
					
						if($id==$row[1]){				
?>				
<form id="monform" action="inscriptionPatient.php" method="post" >		
			<p>
				<label for="numsecu">numero de securité social :</label>
				<input type="text" name="numsecu"   pattern ="[0-9]{15}" maxLength="15"
				value= "<?php echo $row[1]?>" required/>
			</p>
			<p>
				<label for="nom">nom: </label>
				<input type="text" name="nom" pattern="^[A-Z][a-zA-Zçéàâöè\-_ ]{1\,}" 
				value="<?php echo $row[2]?>" required/>
			</p> 

			<p>
				<label for="prenom">prénom: </label>
				<input type="text" name="prenom" pattern="^[A-Z][a-zA-Zçéàâöè\-_ ]{1\,}" 
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
				<input type="tel" name="tel"  pattern="^0[1-6][0-9]{8}$"
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
				pattern="^[a-z][a-zA-Zçéàâöè\-_ ]{1\,}" 
				value="<?php echo $row[8]?>"
				required/>
			</p>

			<p>
				<label for="familiale ">situation familiale:   </label>
				<input type="text" name="familiale"   
				pattern="^[a-z][a-zA-Zçéàâöè\-_ ]{1\,}" 
				value="<?php echo $row[9]?>" required/>
			</p>
			<center><input type="submit" 
				value="Modifier les infos" name="bouton1" /></br></center>';
</form>

			
				
<?php
					}
					}
				//}
			}
		}
	mysqli_close($idconnect);
	}
	?>
<?php
		if (isset($_POST['bouton1'])) {
			
			
		$num=$_POST['numsecu'];
			$nom=$_POST['nom'];

			$prenom=$_POST['prenom'];
			$naissance=$_POST['naissance'];

			$tel=$_POST['tel'];
			$ma=$_POST['email'];

			$posta=$_POST['postale'];
			$prof=$_POST['profession'];

			$fam=$_POST['familiale'];

			$idconnect=mysqli_connect('localhost','root','','cliniques') 
			OR die ('Erreur de connexion');
	
				$query = "SELECT * FROM patient ";
				$result1=mysqli_query($idconnect,$query);
				$id=$_POST['numsecu'];
				$row=array();
				if(!empty($result1)){	
					if (mysqli_num_rows($result1)!=0){
						echo '<div id="succes"><br/><center>';
						while($row=mysqli_fetch_row($result1)){
						if($id==$row[1]){
							$result=false;
							if(!empty($nom)){
								$sql ="UPDATE patient SET nom='$nom'  WHERE numsecu='$id'";
								$result=mysqli_query($sql);	
							}	
							if($result){
								echo '• Modification du nom réussie</br>';
							}
							$result=false;
							if(!empty($prenom)){
								$sql ="UPDATE patient SET prenom='$prenom'  WHERE numsecu='$id'";
								$result=mysqli_query($sql);	
							}
							if($result){
								echo '• Modification du prenom réussie</br>';
							}
							$result=false;
							if(!empty($naissance)){
								$sql ="UPDATE patient SET naissance='$naissance'  WHERE numsecu='$id'";
								$result=mysqli_query($sql);	
							}	
							if($result){
								echo '• Modification de la date de naissance réussie</br>';
							}
							$result=false;
							if(!empty($tel)){
								$sql ="UPDATE patient SET telephone='$tel' WHERE numsecu='$id '";
								$result=mysqli_query($sql);	
							}
							if($result){
								echo '• Modification de numéro de télephone réussie</br>';
							}
							$result=false;
							if(!empty($mail)){
								$sql ="UPDATE patient SET mail='$mail' WHERE numsecu='$id'";
								$result=mysqli_query($sql);	
							}
							if($result){
								echo '• Modification de l\'adresse mail réussie</br>';
							}
							$result=false;
							if(!empty($prof)){
								$sql ="UPDATE patient SET profession='$prof' WHERE numsecu='$id'";
								$result=mysqli_query($sql);	
							}
							if($result){
								echo '• Modification de profession réussie</br>';
							}
							$result=false;
							if(!empty($fam)){
								$sql ="UPDATE patient SET familiale='$fam' WHERE numsecu='$id'";
								$result=mysqli_query($sql);	
							}
							if($result){
								echo '• Modification de situation familiale réussie</br>';
							}
						}
					}
					echo '<br/></center></div>';
					}
				
			}else{
				echo '<center><div id="erreur">Erreur</div></center>';
			}		

		}

?>