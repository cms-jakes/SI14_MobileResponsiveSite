<?php 

$message = '';
$db = new MySQLi('localhost','cmssumme_SI14','aC4KlC#Jog-!', 'cmssumme_SI14');
if ($db->connect_error){
	$message = $db->connect_error;
}else{
		$sql8 = "SELECT * FROM  `TABLE 1` WHERE  `Date` LIKE  '$date' AND  `StartTime` LIKE  '8:30 AM' ";
		$results8 = $db->query($sql8);
		$sql10 = "SELECT * FROM  `TABLE 1` WHERE  `Date` LIKE  '$date' AND  `StartTime` LIKE  '10:10 AM' ";
		$results10 = $db->query($sql10);
		$sql12 = "SELECT * FROM  `TABLE 1` WHERE  `Date` =  '$date' AND  `StartTime` =  '12:40 PM' ";
		$results12 = $db->query($sql12);
		$sql2 = "SELECT * FROM  `TABLE 1` WHERE  `Date` =  '$date' AND  `StartTime` =  '2:20 PM' ";
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