<?php 
$dpt1 = 'Advanced Studies';
$dpt2 = 'Arts Education';
$dpt3 = 'Character Development Initiatives';
$dpt4 = 'Chief of Learning Services';
$dpt5 = 'CPCC';
$dpt6 = 'CTE';
$dpt7 = 'Digital Learning';
$dpt8 = 'ELL Resource Teacher';
$dpt9 = 'ESL';
$dpt10 = 'Exceptional Children';
$dpt11 = 'Health and Physical Education';
$dpt12 = 'Humanities';
$dpt13 = 'Humanities K5 Literacy';
$dpt14 = 'Humanities Global Studies';
$dpt15 = 'Instructional Technology';
$dpt16 = 'Office of Accountability';
$dpt17 = 'PreK12 Academic Support';
$dpt18 = 'Ridge Road Middle School';
$dpt19 = 'STEM';
$dpt20 = 'Teacher PD';
$dpt21 = 'Virtual Learning and Media Services';
$dpt22 = 'Winterfield Elementary';

$message = '';
$db = new MySQLi('localhost','si','si', 'SI_TestDB');
if ($db->connect_error){
	$message = $db->connect_error;
}else{
		$sql1 = "SELECT * FROM  `TABLE 1` WHERE  `Department` LIKE '$dpt1' ORDER BY `TABLE 1`.`Title` ASC ";
		$results1 = $db->query($sql1);
		$sql2 = "SELECT * FROM  `TABLE 1` WHERE  `Department` LIKE '$dpt2' ORDER BY `TABLE 1`.`Title` ASC ";
		$results2 = $db->query($sql2);
		$sql3 = "SELECT * FROM  `TABLE 1` WHERE  `Department` LIKE '$dpt3' ORDER BY `TABLE 1`.`Title` ASC ";
		$results3 = $db->query($sql3);
		$sql4 = "SELECT * FROM  `TABLE 1` WHERE  `Department` LIKE '$dpt4' ORDER BY `TABLE 1`.`Title` ASC ";
		$results4 = $db->query($sql4);
		$sql5 = "SELECT * FROM  `TABLE 1` WHERE  `Department` LIKE '$dpt5' ORDER BY `TABLE 1`.`Title` ASC ";
		$results5 = $db->query($sql5);
		$sql6 = "SELECT * FROM  `TABLE 1` WHERE  `Department` LIKE '$dpt6' ORDER BY `TABLE 1`.`Title` ASC ";
		$results6 = $db->query($sql6);
		$sql7 = "SELECT * FROM  `TABLE 1` WHERE  `Department` LIKE '$dpt7' ORDER BY `TABLE 1`.`Title` ASC ";
		$results7 = $db->query($sql7);
		$sql8 = "SELECT * FROM  `TABLE 1` WHERE  `Department` LIKE '$dpt8' ORDER BY `TABLE 1`.`Title` ASC ";
		$results8 = $db->query($sql8);		
		$sql9 = "SELECT * FROM  `TABLE 1` WHERE  `Department` LIKE '$dpt9' ORDER BY `TABLE 1`.`Title` ASC ";
		$results9 = $db->query($sql9);
		$sql10 = "SELECT * FROM  `TABLE 1` WHERE  `Department` LIKE '$dpt10' ORDER BY `TABLE 1`.`Title` ASC ";
		$results10 = $db->query($sql10);
		$sql11 = "SELECT * FROM  `TABLE 1` WHERE  `Department` LIKE '$dpt11' ORDER BY `TABLE 1`.`Title` ASC ";
		$results11 = $db->query($sql11);
		$sql12 = "SELECT * FROM  `TABLE 1` WHERE  `Department` LIKE '$dpt12' ORDER BY `TABLE 1`.`Title` ASC ";
		$results12 = $db->query($sql12);
		$sql13 = "SELECT * FROM  `TABLE 1` WHERE  `Department` LIKE '$dpt13' ORDER BY `TABLE 1`.`Title` ASC ";
		$results13 = $db->query($sql13);
		$sql14 = "SELECT * FROM  `TABLE 1` WHERE  `Department` LIKE '$dpt14' ORDER BY `TABLE 1`.`Title` ASC ";
		$results14 = $db->query($sql14);
		$sql15 = "SELECT * FROM  `TABLE 1` WHERE  `Department` LIKE '$dpt15' ORDER BY `TABLE 1`.`Title` ASC ";
		$results15 = $db->query($sql15);
		$sql16 = "SELECT * FROM  `TABLE 1` WHERE  `Department` LIKE '$dpt16' ORDER BY `TABLE 1`.`Title` ASC ";
		$results16 = $db->query($sql16);
		$sql17 = "SELECT * FROM  `TABLE 1` WHERE  `Department` LIKE '$dpt1' ORDER BY `TABLE 1`.`Title` ASC ";
		$results17 = $db->query($sql17);
		$sql18 = "SELECT * FROM  `TABLE 1` WHERE  `Department` LIKE '$dpt2' ORDER BY `TABLE 1`.`Title` ASC ";
		$results18 = $db->query($sql18);
		$sql19 = "SELECT * FROM  `TABLE 1` WHERE  `Department` LIKE '$dpt3' ORDER BY `TABLE 1`.`Title` ASC ";
		$results19 = $db->query($sql19);
		$sql20 = "SELECT * FROM  `TABLE 1` WHERE  `Department` LIKE '$dpt4' ORDER BY `TABLE 1`.`Title` ASC ";
		$results20 = $db->query($sql20);
		$sql21 = "SELECT * FROM  `TABLE 1` WHERE  `Department` LIKE '$dpt5' ORDER BY `TABLE 1`.`Title` ASC ";
		$results21 = $db->query($sql21);
		$sql22 = "SELECT * FROM  `TABLE 1` WHERE  `Department` LIKE '$dpt6' ORDER BY `TABLE 1`.`Title` ASC ";
		$results22 = $db->query($sql22);
		
		
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
