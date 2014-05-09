<?php 

$message = '';
$db = new MySQLi('localhost','cmssumme_web','aC4KlC#Jog-!', 'cmssumme_SI14');
if ($db->connect_error){
	$message = $db->connect_error;
}else{
		$sql8 = "SELECT * FROM `SI14Data` WHERE `StartDate` = '$date' AND `StartTime` = '8:30 AM' ORDER BY `Title` ASC";
		$results8 = $db->query($sql8);
		$sql10 = "SELECT * FROM `SI14Data` WHERE `StartDate` = '$date' AND `StartTime` = '10:10 AM' ORDER BY `Title` ASC";
		$results10 = $db->query($sql10);
		$sql12 = "SELECT * FROM `SI14Data` WHERE `StartDate` = '$date' AND `StartTime` = '12:40 PM' ORDER BY `Title` ASC";
		$results12 = $db->query($sql12);
		$sql2 = "SELECT * FROM `SI14Data` WHERE `StartDate` = '$date' AND `StartTime` = '2:20 PM' ORDER BY `Title` ASC";
		$results2 = $db->query($sql2);
		
}
		
if ($db->error) {
		$message = $db->error;
		echo $message;
	} 
?> 
<div>
	<?php if($message) {
		echo"<h1>$message</h1>";
	} ?>
</div>