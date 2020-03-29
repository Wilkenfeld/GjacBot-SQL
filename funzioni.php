<?php

function curl($url) {
	$curl = curl_init();
	curl_setopt_array($curl, [
	CURLOPT_RETURNTRANSFER => 1,
	CURLOPT_URL => $url,
	CURLOPT_USERAGENT => 'TelegramBot'
	]);
	$resp = curl_exec($curl);
	curl_close($curl);
}

function sendMessage($chatID, $testo, $menu) {
	$parsemode = "HTML";
	$ipertesto = urlencode($testo);
	if($menu) {
		$tastiera = urlencode($menu);
	} else {
		$menu = '';
	}
	$url = endpoints['api']. '/sendmessage?chat_id='.$chatID.'&text='.$ipertesto.'&parse_mode='.$parsemode.'&reply_markup={"inline_keyboard":'.$tastiera.'}';
	curl($url);
}

function forwardMessage($chatID, $fromChannel, $msgID) {
	$url = endpoints['api']. '/forwardMessage?chat_id='.$chatID.'&from_chat_id='.$fromChannel.'&message_id='.$msgID.'';
	curl($url);
}
