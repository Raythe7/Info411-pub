 <?php
    require('connect.php');
	
	$CONNEXION = mysqli_connect ($host,$user,$pass,$dbname);
	//Connexion au serveur de bases de données
	if (mysqli_connect_errno()) {
		echo 'Désolé, connexion au serveur ' . "mariadb" . ' impossible, '. mysqli_connect_error(), "\n";
    	exit();
	}
	// Sélection de la base de données
	mysqli_select_db($CONNEXION, $dbname); 
	if (mysqli_connect_errno()) {
		echo 'Désolé, accès à la base ' . $dbname . ' impossible, '. mysqli_connect_error(), "\n";
    	exit();
	}
	// Spécification de l'encodage UTF-8 pour dialoguer avec la BD
	if (!mysqli_set_charset($CONNEXION, 'UTF8')) {
    	echo 'Erreur au chargement de l\'encodage UTF-8 : ', mysqli_connect_error(), "\n";
	}
?>