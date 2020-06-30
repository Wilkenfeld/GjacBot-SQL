<?php
require_once 'waf.php';
$firewall = new TGFirewall();

if(!isset($_GET['api']) | $_GET['api'] == null) die(); else define('token', $_GET['api']);

define('update', json_decode(file_get_contents('php://input'),true));
define('endpoints', ['api' => 'https://api.telegram.org/bot'.token,
'file' => 'https://api.telegram.org/file/bot'.token.'/']);

function isnull($test) {
	if (null !== $test) return true;
	else return false;
}
if(isnull(update['message']['text'])) $testo = update['message']['text']; 
if(isnull(update['message']['chat']['id'])) $chatID = update['message']['chat']['id'];
if(isnull(update['message']['from']['id'])) $userID = update['message']['from']['id'];
if(isnull(update['message']['from']['username'])) $username = update['message']['from']['username'];
if(isnull(update['message']['from']['first_name'])) $nome = update['message']['from']['first_name'];
if(isnull(update['message']['from']['last_name'])) $cognome = update['message']['from']['last_name'];
if(isnull(update['message']['from']['first_name'] && update['message']['from']['last_name'])) $tuttoilnome = $nome.''.$cognome;
if(isnull(update['message']['location'])) $location = update['message']['location'];
if(isnull(update['message']['location']['longitude'])) $longitudine = update['message']['location']['longitude'];
if(isnull(update['message']['location']['latitude'])) $latitudine = update['message']['location']['latitude'];
if(isnull(update['message']['voice']['file_id'])) $voice = update['message']['voice']['file_id'];
if(isnull(update['message']['photo'][0]['file_id'])) $photo = update['message']['photo'][0]['file_id'];
if(isnull(update['message']['document']['file_id'])) $document = update['message']['document']['file_id'];
if(isnull(update['message']['audio']['file_id'])) $audio = update['message']['audio']['file_id'];
if(isnull(update['message']['sticker']['file_id'])) $sticker = update['message']['sticker']['file_id'];
if(isnull(update['message']['from']['language_code'])) $lingua = update['message']['from']['language_code'];

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