<?php 

require('../connect.php');
	
$CONNEXION = mysqli_connect ($host,$user,$pass,$dbname);

$sql = "SELECT * FROM `brawlers`";
$result = mysqli_query($CONNEXION, $sql);

$brawlers = array();

while ($row = mysqli_fetch_assoc($result)) {
    $brawlers[] = $row;
}

mysqli_close($CONNEXION);

echo json_encode($brawlers);
?>

