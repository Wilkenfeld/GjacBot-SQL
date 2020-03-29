<?php

$servername = "localhost"; # Hostname
$user = ""; # Username
$password = ""; # Password
$dbname = ""; # Database Name

		$tabella = "TelegramBot";
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $user, $password);
		$sth = $conn->prepare('CREATE TABLE IF NOT EXISTS '.$tabella.' ( id int(0) AUTO_INCREMENT, chat_id bigint(0), username varchar(200), status varchar(200), PRIMARY KEY (id))');
		$sth->execute();
	
	if($sth->errorCode() != "00000") {
		$errore = $sth->errorInfo()[2];
	} else {
		$res = $conn->query("select * from $tabella where chat_id = $chatID");
		$count_row = count($res->fetchAll());
		if ( $count_row > 0) {
			$conn->query("update $tabella set page = '' where chat_id = $chatID");
			$u = $res->fetchAll();
		} else {
			$conn->query("insert into $tabella (chat_id, status, username) values ($chatID, '', \"".$username."\")");
		}
	}