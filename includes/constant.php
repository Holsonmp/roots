<?php 
	/*
		Configuration HD
		HOST = HTTP_HOST ET DATA BASE
	*/
	$DB_SERVER = "localhost"; 
	$DB_USER = "root"; 
	$DB_PASS = ""; 
	$DB_DATABASE = "database_hlone";
	// try { 
		// $db =  new PDO("mysql:host=$DB_SERVER; dbname=$DB_DATABASE", $DB_USER,$DB_PASS); 
	// }
	// catch (PDOException $e) { 
		// if (empty($DB_DATABASE)) {
	 		// die("<!Doctype html><html><head><title>Connexion depuis Horsia Developpement</title><meta charset='utf-8' /></head><body><div style='padding: 0.75rem 1.25rem;color: #004085;background-color: #cce5ff;border-color: #b8daff;margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;font-family:Consolas,sans-serif'><strong style='text-align:center'>Pas de base de données $DB_DATABASE trouvée..! </strong> <br/>Un problème interne est survenu au moment de la connexion au serveur. contacter <a href='mailto:holsonm74@gmail.com'>l'administrateur</a> du système pour l'informer.</div></body></html>") ;
		// } else {
	 		// die("<!Doctype html><html><head><title>Connexion depuis Horsia Developpement</title><meta charset='utf-8' /></head><body><div style='padding: 0.75rem 1.25rem;color: #004085;background-color: #cce5ff;border-color: #b8daff;margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;font-family:Consolas,sans-serif'><strong style='text-align:center'>Pas de base de données $DB_DATABASE trouvée..! </strong> <br/>Un problème interne est survenu au moment de la connexion au serveur. contacter <a href='mailto:holsonm74@gmail.com'>l'administrateur</a> du système pour l'informer</div></body></html>") ;
		// }
	// } 
	// $db->query("set charcter_set_server = 'utf8'"); 
	// $db->query("set names'utf8' ");  
	define("ROOTPATH", (isset($_SERVER['HTTPS']) ? "https://" : "http://") . $_SERVER['HTTP_HOST'] . '/');
	define("DASHBOARD", "".ROOTPATH."/dashboard");
	define("LIEN_DE_LA_PAGE", ''.ROOTPATH.''.$_SERVER['REQUEST_URI'].'');
	function chaine_aleatoire($nb_car, $chaine = 'azertyuiopqsdfghjklmwxcvbn123456789'){$nb_lettres = strlen($chaine) - 1;$generation = '';for($i=0; $i < $nb_car; $i++){$pos = mt_rand(0, $nb_lettres);$car = $chaine[$pos];$generation .= $car;}return $generation;}
?>