<?php 

$message = '';
$db = new MySQLi('localhost','cmssumme_web','aC4KlC#Jog-!', 'cmssumme_SI14');
if ($db->connect_error){
	$message = $db->connect_error;
}else{
		$sqlCan = "SELECT * FROM `Canceled` WHERE `StartDate` = '$date' ORDER BY `Title` ASC";
		$resultsCan = $db->query($sqlCan);
		
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