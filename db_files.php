<?php
	//dit vooraf via commandline
	//creating playertable
	CREATE TABLE games (
	id INT AUTO_INCREMENT,
	playerO VARCHAR(100),
	playerX VARCHAR(100),
	PRIMARY KEY (id)
	);
	
	//creating board table
	CREATE TABLE board (
	id INT(100),
	tile0 VARCHAR(1),
	tile1 VARCHAR(1),
	tile2 VARCHAR(1),
	tile3 VARCHAR(1),
	tile4 VARCHAR(1),
	tile5 VARCHAR(1),
	tile6 VARCHAR(1),
	tile7 VARCHAR(1),
	tile8 VARCHAR(1),
	PRIMARY KEY (id)
	);
	
	//dit via php gekoppelt aan js/ajax function (let op, is wel beetje pseudocode soms)
	//connecting
	require_once('config.inc.php');
	$db = new PDO("mysql:dbname=$db_name;host=$db_host", $db_user, $db_pass,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCDEPTION]); 
	
	//start new game, inserting players in playertable and creating new empty board with id
	$sql = "INSERT INTO games (playerO, playerX)VALUES('playerO', 'playerX')";
	if($db->query($sql) === TRUE) {
		$gameID = $dbgames->insert_id;
		$db->query('INSERT INTO board ($gameID, " ", " ", " ", " ", " ", " ", " ", " ", " ")');	
		
	}
	
	//inserting move into db
	function(int tileIndex, char XorO, int gameID) {
		var  = 'tile'+tileIndex;
		$statement = $db->prepare("UPDATE board i='XorO" WHERE id=gameID); //weet niet precies hoe dit werkt, maar de intentie lijkt me wel duidelijk toch?
		$statement->exectue();
	}
	
	
	
		
?>