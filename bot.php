<?php
require_once 'waf.php';
$firewall = new TGFirewall();
$firewall->start();

if(!isset($_GET['api']) | $_GET['api'] == null) die(); else define('token', $_GET['api']);

define('update', json_decode(file_get_contents('php://input'),true));
define('endpoints', ['api' => 'https://api.telegram.org/bot'.token,
'file' => 'https://api.telegram.org/file/bot'.token.'/']);

define(
'cfg', 
['id' => 766254943], #! Inserisci qui il tuo Id se hai bisogno di usare le funzioni admin ( @UsInfoBot, funzioni in sviluppo )
['database' => true]
);

require_once 'vars.php';
require_once'funzioni.php' ;
$bot = new bot();
$bot->useDatabase(
'localhost', // L'host del database MySQL
'db_username', // L'username del database MySQL
'db_password', // La password del database MySQL
'db_name' // Il nome del database MySQL
);
require_once 'comandi.php';

?>