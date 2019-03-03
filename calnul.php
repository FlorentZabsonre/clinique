<?php
include("datefr.php");

if (isset($_POST['envoyer1'])) {

	$idconnect=mysqli_connect('localhost','root','','cliniques') OR die ('Erreur de connexion');
	$query="SELECT * FROM planing";

	$result=mysqli_query($idconnect,$query);
	$medecin=$_POST['nom'];
	$affiche=false;

	$lesdate=array();
	$lesmois=array();
	$i=0;

	if( !empty($result)){
//verifi si la table n'est pas vide
		if(mysqli_num_rows($result) != 0){
			//verifi si le nb de ligne de la table  n'est pas null
			while ($row1= mysqli_fetch_row($result)){

				if($row1[1]==$medecin){
					
					$lesdate[$i]=$row1[3];
					$lesheures[$i]=$row[4];
					$i=$i+1;
				}
			}
		}

	}
$date=time();//sytocke la date actuelle
$day= date('d',$date);
$month=date('m',$date);
$year=date('Y',$date);
$first_day = mktime(0,0,0,$month,1,$year);
$title=date('F',first_day);
$day_of_week('D',$first_day);
$mois= mois_fr();

switch($day_of_week){
	case "Mon" : $blank = 0; break;
	case "Tue" : $blank = 1; break;
	case "Wed" : $blank = 2; break;
	case "Thu" : $blank = 3; break;
	case "Fri" : $blank = 4; break;
	case "Sat" : $blank = 5; break;
	case "Sun" : $blank = 6; break;

}
$day_in_lonth= cal_days_in_month(0, $month, $year);
//Retourne le nombre de jours dans un mois, pour une année et un calendrier donné

echo "<br/><center>";
echo "<table width=500px>";
echo "<tr><th colspan=60> $mois $year </th></tr>";
echo "<tr>
<td >Lundi</td>
<td >Mardi</td>
<td >Mercredi</td>
<td >Jeudi</td>
<td >Vendredi</td>
<td >Samedi</td>
<td >Dimanche</td>";
$day_count =1;
echo "<tr>";
while($blank >0){
	?>
	<tdclass="empty"></td>
	<?php
	$blank=$blank-1;
	$day_count=$day+1;
}
$day_num=1;
$limite=$i-1;
while($day_num<=$day_in_month){
	$tmp=0;
	$nb=0;
	$affiche=true;
	while($tmp<$i){
		if($day_num == $lesdate[$tmp] And $affiche==true){
			$nb=$nb+2;
			$affiche=false;
			?>
			<td class="taken">
				<?php echo $day_num; ?>
			</td>
			<?php      
		}else{
			if ($nb==$limite){
				echo "<td>$day_num</td>";
			}		 		
		}

		$nb=$nb+1;
		$tmp=$tmp+1;
	}
	$day++;
	$day_count++;
	if(day_count>7){
		echo "</tr><tr>";
		$day_count=1;
	}

}
while ($day_count>1 && $day_count <= 7) {
	?>
	<td class="empty"></td>
	<?php
	$day_count++;
}

echo "</tr></table></center><br/><br/>";

}
?>	