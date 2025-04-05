<?php 

require('../connect.php');
	
$CONNEXION = mysqli_connect("mariadb", MARIADB_USER, MARIADB_PASSWORD, MARIADB_DATABASE);

$sql = "SELECT * FROM `brawlers`";
$result = mysqli_query($CONNEXION, $sql);

$brawlers = array();

while ($row = mysqli_fetch_assoc($result)) {
    $brawlers[] = $row;
}

mysqli_close($CONNEXION);

echo json_encode($brawlers);
?>

