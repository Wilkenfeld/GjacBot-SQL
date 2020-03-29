<?php
########## ESEMPI DI RISPOSTE ##########

if (in_array($testo[0], ['/', '!', '.', '>'])) {
$cmd = substr($testo, 1, strlen($testo));
}

if($cmd === 'start') { 
	$menu = '[ [{"text": "Canale 💎", "url": "https://t.me/joinchat/AAAAAFhp0uVJUhW6D4uToQ"}] ]'; #! URL per inserire un link, callback_data per inserire un comando
	sendMessage($chatID, "<b>GjacBot v3.0.1.1</b>\n\n<i>Prova anche la modalità inoltro!</i> /forward", $menu);
} 

if($cmd === 'forward') { 
	forwardMessage($chatID, '-1001449394309', '20'); #! Ovviamente non lo manderà se il bot non è nel canale di input
} 

########################################

