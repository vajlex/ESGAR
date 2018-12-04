<?php

function runQuery($query){
	$db = new mysqli($GLOBALS['hostESGAR'],$GLOBALS['userESGAR'],$GLOBALS['pwESGAR'],$GLOBALS['dbESGAR']);
	$db->query('set names utf8mb');
	$result = $db->query($query);
	mysqli_close($db);
	return $result;
}

?>