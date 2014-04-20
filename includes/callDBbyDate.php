<?php 
$j0 = '0000-00-00';
$j16 = 'June 16th';
$j17 = 'June 17th';
$j18 = 'June 18th';
$j19 = 'June 19th';
$j23 = 'June 23rd';
$j24 = 'June 24th';
$j25 = 'June 25th';
$j26 = 'June 26th';

$message = '';
$db = new MySQLi('localhost','si','si', 'SI_TestDB');
if ($db->connect_error){
	$message = $db->connect_error;
}else{
		$sql0 = "SELECT * FROM 'TABLE 1' WHERE 'DATE' LIKE '$j0' ORDER BY 'TABLE 1'.'StartTime' ASC";
		$results0 = $db->query($sql0);
		$sql16 = "SELECT * FROM  `TABLE 1` WHERE  `Date` LIKE '$j16' ORDER BY `TABLE 1`.`StartTime` ASC ";
		$results16 = $db->query($sql16);
		$sql17 = "SELECT * FROM  `TABLE 1` WHERE  `Date` LIKE '$j17' ORDER BY `TABLE 1`.`StartTime` ASC ";
		$results17 = $db->query($sql17);
		$sql18 = "SELECT * FROM  `TABLE 1` WHERE  `Date` LIKE '$j18' ORDER BY `TABLE 1`.`StartTime` ASC ";
		$results18 = $db->query($sql18);
		$sql19 = "SELECT * FROM  `TABLE 1` WHERE  `Date` LIKE '$j19' ORDER BY `TABLE 1`.`StartTime` ASC ";
		$results19 = $db->query($sql19);
		$sql23 = "SELECT * FROM  `TABLE 1` WHERE  `Date` LIKE '$j23' ORDER BY `TABLE 1`.`StartTime` ASC ";
		$results23 = $db->query($sql23);
		$sql24 = "SELECT * FROM  `TABLE 1` WHERE  `Date` LIKE '$j24' ORDER BY `TABLE 1`.`StartTime` ASC ";
		$results24 = $db->query($sql24);
		$sql25 = "SELECT * FROM  `TABLE 1` WHERE  `Date` LIKE '$j25' ORDER BY `TABLE 1`.`StartTime` ASC ";
		$results25 = $db->query($sql25);
		$sql26 = "SELECT * FROM  `TABLE 1` WHERE  `Date` LIKE '$j26' ORDER BY `TABLE 1`.`StartTime` ASC ";
		$results26 = $db->query($sql26);

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