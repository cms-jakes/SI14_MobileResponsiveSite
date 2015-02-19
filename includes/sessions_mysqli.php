<?php
$db = new mysqli('localhost', 'si','si', 'SI_TestDB');
if ($db->connect_error) {
	$error = $db->connect_error;
} else {
	$sql = 'SELECT `Department`,`PrimaryPresenter`,`ID`,`SecondPresenter`,`Title`,`Description` FROM `TABLE 1`
ORDER BY `Title`'; 
	$result = $db->query($sql);
	if ($db->error) {
		$error = $db->error;
	}
}
if (isset($error)) {
	echo $error;
} else {
	echo 'OK';
}
function getRow($result) {
	return $result->fetch_assoc();
}