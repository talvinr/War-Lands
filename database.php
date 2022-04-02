<?php

$sname= "localhost";
$unmae= "id17938039_wldata";
$password = "Ls&c~~HBM<G%3huG";

$db_name = "id17938039_warlandsdb";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}

?>