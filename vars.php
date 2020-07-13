<?php
if(null !== update) {
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
	}
	$testo = update['message']['text']; 
	$chatID = update["message"]["chat"]["id"];
	$userID = update["message"]["from"]["id"];
	$username = update["message"]["from"]["username"];
	$nome = update["message"]["from"]["first_name"];
	$cognome = update["message"]["from"]["last_name"];
	$tuttoilnome = $nome."".$cognome;
	$location = update["message"]["location"];
	$longitudine = update["message"]["location"]["longitude"];
	$latitudine = update["message"]["location"]["latitude"];
	$voice = update["message"]["voice"]["file_id"];
	$photo = update["message"]["photo"][0]["file_id"];
	$document = update["message"]["document"]["file_id"];
	$audio = update["message"]["audio"]["file_id"];
	$sticker = update["message"]["sticker"]["file_id"];
	$lingua = update["message"]["from"]["language_code"];
}
$isadmin = in_array($chatID, $admin); //da il true se la chat è admin
