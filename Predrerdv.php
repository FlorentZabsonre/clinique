<?php
if(isset($_POST['Envoyer2'])){

	$idconnect=mysqli_connect('localhost','root','','cliniques') OR die ('Erreur de connexion');
	$medecin=$_POST['nom'];
	$numsecu=$_POST['numsecu'];
	echo $numsecu ;
	$date_rdv=$_POST['daterd'];
	$heur=$_POST['heure'];
	$Motif=$_POST['Motif'];
	$query = "SELECT * FROM planing  ";
	$result = mysqli_query($idconnect,$query);
			$condition=true;
				if (mysqli_num_rows($result)!=0) {
					while ($row = mysqli_fetch_row($result)){			
						if($row[3]=$date_rdv){
							echo '<center><div id="erreur"> Désole cette date est déjà prise</div></center>';
							$condition=false;
						}
					}
				}

				if($condition){	
							$query2 ="insert into planning values('','$medecin','$numsecu','$date_rdv','$heur', '$Motif'";
								$result2=mysqli_query($idconnect,$query2);

							if($result2){
								$query3 = "SELECT * FROM acte";
									
								$result3 = mysql_query($query3) or die ("erreur id n'existe pas");
								if(!empty($result3)){
									
									if (mysql_num_rows($result3)!=0) {
								
										while ($row = mysql_fetch_row($result3)){
											 
											if($row[1]== $Motif ){
												echo '<center> pour  le rendez vous  il faut </br> '. $row[1] .'</center></br>';
											}
										}
									}
								}
	echo'<center><div id="succes"> Prise de rendez-vous réussie </div><center>';
							}else{
								echo '<center><div id="erreur"> Echec </div></center>';
							}
						}
					

mysqli_close($idconnect);
					}	
?>	
			
	