<?php
//ENREGISTREMENT DANS LA TABLE DE CORRESPONDANCE POUR LA ROTATION	
	
if($j==1){$jo="Monday";}	
if($j==2){$jo="Tuesday";}	
if($j==3){$jo="Wednesday";}	
if($j==4){$jo="Thursday";}	
if($j==5){$jo="Friday";}	


$queryw ="SELECT numcli FROM intermediares ORDER BY numcli ASC LIMIT $startfin,$limitfin ";
$mysql_resultw = mysql_query($queryw) or die ("Erreur : ".mysql_error());
while($rows = mysql_fetch_array($mysql_resultw))
                              {
							       $clfin= ($rows["numcli"]);
									  
								  
$sql = 'INSERT INTO  pubcorrespondance(numcli,jours) VALUES ("'.$clfin.'","'.$jo.'")';
mysql_query($sql);						  
                                      

}
?>