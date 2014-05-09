<?php 

$message = '';
$db = new MySQLi('localhost','cmssumme_web','aC4KlC#Jog-!', 'cmssumme_SI14');
if ($db->connect_error){
	$message = $db->connect_error;
}else{
		$sql816 = "SELECT * FROM `SI14Data` WHERE `StartDate` = 'June 16th' AND `StartTime` = '8:30 AM' ORDER BY `Title` ASC";
		$results816 = $db->query($sql816);
		$sql1016 = "SELECT * FROM `SI14Data` WHERE `StartDate` = 'June 16th' AND `StartTime` = '10:10 AM' ORDER BY `Title` ASC";
		$results1016 = $db->query($sql1016);
		$sql1216 = "SELECT * FROM `SI14Data` WHERE `StartDate` = 'June 16th' AND `StartTime` = '12:40 PM' ORDER BY `Title` ASC";
		$results1216 = $db->query($sql1216);
		$sql216 = "SELECT * FROM `SI14Data` WHERE `StartDate` = 'June 16th' AND `StartTime` = '2:20 PM' ORDER BY `Title` ASC";
		$results216 = $db->query($sql216);
		
		$sql817 = "SELECT * FROM `SI14Data` WHERE `StartDate` = 'June 17th' AND `StartTime` = '8:30 AM' ORDER BY `Title` ASC";
		$results817 = $db->query($sql817);
		$sql1017 = "SELECT * FROM `SI14Data` WHERE `StartDate` = 'June 17th' AND `StartTime` = '10:10 AM' ORDER BY `Title` ASC";
		$results1017 = $db->query($sql1017);
		$sql1217 = "SELECT * FROM `SI14Data` WHERE `StartDate` = 'June 17th' AND `StartTime` = '12:40 PM' ORDER BY `Title` ASC";
		$results1217 = $db->query($sql1217);
		$sql217 = "SELECT * FROM `SI14Data` WHERE `StartDate` = 'June 17th' AND `StartTime` = '2:20 PM' ORDER BY `Title` ASC";
		$results217 = $db->query($sql217);		

		$sql818 = "SELECT * FROM `SI14Data` WHERE `StartDate` = 'June 18th' AND `StartTime` = '8:30 AM' ORDER BY `Title` ASC";
		$results818 = $db->query($sql818);
		$sql1018 = "SELECT * FROM `SI14Data` WHERE `StartDate` = 'June 18th' AND `StartTime` = '10:10 AM' ORDER BY `Title` ASC";
		$results1018 = $db->query($sql1018);
		$sql1218 = "SELECT * FROM `SI14Data` WHERE `StartDate` = 'June 18th' AND `StartTime` = '12:40 PM' ORDER BY `Title` ASC";
		$results1218 = $db->query($sql1218);
		$sql218 = "SELECT * FROM `SI14Data` WHERE `StartDate` = 'June 18th' AND `StartTime` = '2:20 PM' ORDER BY `Title` ASC";
		$results218 = $db->query($sql218);
		
		$sql819 = "SELECT * FROM `SI14Data` WHERE `StartDate` = 'June 19th' AND `StartTime` = '8:30 AM' ORDER BY `Title` ASC";
		$results819 = $db->query($sql819);
		$sql1019 = "SELECT * FROM `SI14Data` WHERE `StartDate` = 'June 19th' AND `StartTime` = '10:10 AM' ORDER BY `Title` ASC";
		$results1019 = $db->query($sql1019);
		$sql1219 = "SELECT * FROM `SI14Data` WHERE `StartDate` = 'June 19th' AND `StartTime` = '12:40 PM' ORDER BY `Title` ASC";
		$results1219 = $db->query($sql1219);
		$sql219 = "SELECT * FROM `SI14Data` WHERE `StartDate` = 'June 19th' AND `StartTime` = '2:20 PM' ORDER BY `Title` ASC";
		$results219 = $db->query($sql219);
		
		$sql823 = "SELECT * FROM `SI14Data` WHERE `StartDate` = 'June 23rd' AND `StartTime` = '8:30 AM' ORDER BY `Title` ASC";
		$results823 = $db->query($sql823);
		$sql1023 = "SELECT * FROM `SI14Data` WHERE `StartDate` = 'June 23rd' AND `StartTime` = '10:10 AM' ORDER BY `Title` ASC";
		$results1023 = $db->query($sql1023);
		$sql1223 = "SELECT * FROM `SI14Data` WHERE `StartDate` = 'June 23rd' AND `StartTime` = '12:40 PM' ORDER BY `Title` ASC";
		$results1223 = $db->query($sql1223);
		$sql223 = "SELECT * FROM `SI14Data` WHERE `StartDate` = 'June 23rd' AND `StartTime` = '2:20 PM' ORDER BY `Title` ASC";
		$results223 = $db->query($sql223);
		
		$sql824 = "SELECT * FROM `SI14Data` WHERE `StartDate` = 'June 24th' AND `StartTime` = '8:30 AM' ORDER BY `Title` ASC";
		$results824 = $db->query($sql824);
		$sql1024 = "SELECT * FROM `SI14Data` WHERE `StartDate` = 'June 24th' AND `StartTime` = '10:10 AM' ORDER BY `Title` ASC";
		$results1024 = $db->query($sql1024);
		$sql1224 = "SELECT * FROM `SI14Data` WHERE `StartDate` = 'June 24th' AND `StartTime` = '12:40 PM' ORDER BY `Title` ASC";
		$results1224 = $db->query($sql1224);
		$sql224 = "SELECT * FROM `SI14Data` WHERE `StartDate` = 'June 24th' AND `StartTime` = '2:20 PM' ORDER BY `Title` ASC";
		$results224 = $db->query($sql224);
		
		$sql825 = "SELECT * FROM `SI14Data` WHERE `StartDate` = 'June 25th' AND `StartTime` = '8:30 AM' ORDER BY `Title` ASC";
		$results825 = $db->query($sql825);
		$sql1025 = "SELECT * FROM `SI14Data` WHERE `StartDate` = 'June 25th' AND `StartTime` = '10:10 AM' ORDER BY `Title` ASC";
		$results1025 = $db->query($sql1025);
		$sql1225 = "SELECT * FROM `SI14Data` WHERE `StartDate` = 'June 25th' AND `StartTime` = '12:40 PM' ORDER BY `Title` ASC";
		$results1225 = $db->query($sql1225);
		$sql225 = "SELECT * FROM `SI14Data` WHERE `StartDate` = 'June 25th' AND `StartTime` = '2:20 PM' ORDER BY `Title` ASC";
		$results225 = $db->query($sql225);
		
		$sql826 = "SELECT * FROM `SI14Data` WHERE `StartDate` = 'June 26th' AND `StartTime` = '8:30 AM' ORDER BY `Title` ASC";
		$results826 = $db->query($sql826);
		$sql1026 = "SELECT * FROM `SI14Data` WHERE `StartDate` = 'June 26th' AND `StartTime` = '10:10 AM' ORDER BY `Title` ASC";
		$results1026 = $db->query($sql1026);
		$sql1226 = "SELECT * FROM `SI14Data` WHERE `StartDate` = 'June 26th' AND `StartTime` = '12:40 PM' ORDER BY `Title` ASC";
		$results1226 = $db->query($sql1226);
		$sql226 = "SELECT * FROM `SI14Data` WHERE `StartDate` = 'June 26th' AND `StartTime` = '2:20 PM' ORDER BY `Title` ASC";
		$results226 = $db->query($sql226);		

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