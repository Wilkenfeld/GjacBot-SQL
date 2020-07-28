<?php
$testo = update['message']['text']; 
$location = update['message']['location'];
$longitudine = update['message']['location']['longitude'];
$latitudine = update['message']['location']['latitude'];
$voice = update['message']['voice']['file_id'];
$photo = update['message']['photo'][0]['file_id'];
$document = update['message']['document']['file_id'];
$audio = update['message']['audio']['file_id'];
$sticker = update['message']['sticker']['file_id'];
$lingua = update['message']['from']['language_code'];
if(update['callback_query']) {
	$cbid = update['callback_query']['id'];
	$cbdata = update['callback_query']['data'];
	$cbmsg = update['callback_query']['message']['text'];
	$msgID = update['callback_query']['message']['message_id'];
	$chatID = update['callback_query']['message']['chat']['id'];
	$userID = update['callback_query']['from']['id'];
	$nome = update['callback_query']['from']['first_name'];
	$cognome = update['callback_query']['from']['last_name'];
	$username = update['callback_query']['from']['username'];
	$lang = update['callback_query']['from']['language_code'];
} else {
	$chatID = update['message']['chat']['id'];
	$userID = update['message']['from']['id'];
	$msgID = $update['message']['message_id'];
	$username = update['message']['from']['username'];
	$nome = update['message']['from']['first_name'];
	$cognome = update['message']['from']['last_name'];
	$tuttoilnome = $nome.''.$cognome;
	$cbid = '';
	$cbdata = '';
	$cbmsg = '';
}
