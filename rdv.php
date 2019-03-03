<?php
if(isset($_POST['Envoyer1'])){
	//echo "zzzzzzzz";
	$idconnect=mysqli_connect('localhost','root','','cliniques') OR die ('Erreur de connexion');
	$query="SELECT * FROM planing";
	$spe=$_POST['spe'];
	$numsecu=$_POST['numsecu'];
	$nom=$_POST['nom'];

	
	/*$query4="SELECT numsecu FROM patient";
	$resu=mysqli_query($idconnect,$query4);
	while ($row4=mysqli_fetch_row($resu)) {
		$trouve=false;
		if($numsecu==$row4[1]){
$trouve=true;
break;
}

if($trouve==true){
	*/if(!empty($spe)){


		$result=mysqli_query($idconnect,$query);
		$i=0;
		if(mysqli_num_rows($result)!=0){
			while($row1 =mysqli_fetch_row($result)){
				if($row1[1] == $nom){
					echo'<p>docteur '. $row1[1].' :';

					$query1="SELECT patient.nom, patient.prenom FROM patient,planing 
					Where patient.numsecu='$numsecu' and planing.numsecu='$numsecu'";
					//echo $query1;
					$result1=mysqli_query($idconnect,$query1);

					if(mysqli_num_rows($result1) !=0){
						//echo "sssss";
						while ($row2= mysqli_fetch_row($result1) ) {
							$nom1=$row2[0];
							$prenom=$row2[1];
								$querya="SELECT * FROM planing";
								$result3=mysqli_query($idconnect,$querya);

								while ($row3=mysqli_fetch_row($result3)) {
									# code...
									$daterdv=$row3[3];
									$heurerdv=$row3[4];
							# code...
							echo  $nom1.'   '.$prenom.'a pris rendez-vous le '.$daterdv.' à '.$heurerdv.'</p>';
						}
						}
					}
				
				}
			}
		}


	}
}
?>
<?php
if (isset($_POST['Envoyer1'])){
	?>
	<br />
	<form>

	<center><h2>Ajouter un rendez-vous </h2></center><br/>

	<p>
			<label for="daterd">date pour le rendez-vous: </label>
			<input type="date" name="daterd"placeholder="AAAA/MM/JJ" required/>
		</p>

	<br />

	<label for="nom">Nom du patient</label>
	<input type="text" name="Pnom" id="Pnom" placeholder="Dupont"  pattern="[A-Z]{1}[A-Z-a-zéàïç\s]{1,}" required onKeyUp="check(this);" />
	<br/>
	<label for="heure">Heure</label> 
	<select name="heure" id="heure">
		<option value="09h à 10h">9h à 10h</option>
		<option value="10h à 11h">10h à 11h</option>
		<option value="11h à 12h">11h à 12h</option>
		<option value="14h à 15h">14h à 15h</option>
		<option value="15h à 16h">15h à 16h</option>
		<option value="16h à 17h">16h à 17h</option>
		<option value="17h à 18h">17h à 18h</option> 
	</select>
</br>
<?php
	echo '<p><label for="nomMedic">acte: </label>';
	$idconnect = mysqli_connect ( 'localhost', 'root', '', 'cliniques' );
	$query = "SELECT * FROM acte ";
	$result = mysqli_query ($idconnect,$query);
	echo '<select name="Motif">';
	if (mysqli_num_rows($result)!=0){
		echo'<option value="_" selected="selected"></option>';
 		while($row = mysqli_fetch_row($result)){
 			
 				echo'<option value="'.$row[1].'">'.$row[1].'</option>';
 			
 		}
 	}
 	echo '</select></p>';
 	mysqli_close ($idconnect);
?>
	<?php
	$idconnect=mysqli_connect('localhost','root','','cliniques')
	OR die ('Erreur de connexion');

	$query2="SELECT* FROM piece";
	$result2=mysqli_query($idconnect,$query2);
	if(!empty($result2)){
		if(mysqli_num_rows($result2)!=0){
			while($row=mysqli_fetch_row($result2)){
				?>
				<option value="<?php echo $row[0];?>">
					<?php echo $row[0]; ?>
				</option>
			<?php
			}
			?>

			<option value="Autre">Autre</option><br />
		</select>

		<br/><br/>
		<?php
				}
			}

}
?>
					<br />
				<?php if (isset($_POST['Envoyer1'])) {
					echo '<center><input type="submit" value="Valide" name="Envoyer2" /></center>';
					}
				?>		
			<?php include("Predrerdv.php"); ?>
			
			</form>
			<br/>
		
		<br/>
	
     	
	</body>
</html>
