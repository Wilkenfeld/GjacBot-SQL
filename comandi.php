<?php
########## ESEMPI DI RISPOSTE ##########
if($bot->is($cmd,'start')) { 
	$menu = '[ [{"text": "Canale 💎", "url": "https://t.me/lucadevelopments"}] ]'; #! URL per inserire un link, callback_data per inserire un comando
	$bot->sendMessage($chatID, "<b>GjacBot v4</b>\nComandi disponibili:\n/forward (Devi aggiungere il bot al canale dal quale prendi il messaggio),\n/photo\n/photoinline\n/start", $menu);
}

if($bot->is($cmd,'photoinline')) { 
	$menu = '[ [{"text": "Canale 💎", "url": "https://t.me/lucadevelopments"}] ]'; #! URL per inserire un link, callback_data per inserire un comando
	$bot->sendPhoto($chatID, 'Ciao!', "https://testad.altervista.org/bot/gjacbotsql/photo.png", $menu); 
}

if($bot->is($cmd,'photo')) { 
	$bot->sendPhoto($chatID, 'ciao', "https://testad.altervista.org/bot/gjacbotsql/photo.png");
}

if($bot->is($cmd,'forward')) { 
	$bot->forwardMessage($chatID, '-1001483330277', '368'); #! Ovviamente non lo manderà se il bot non è nel canale di input
} 

########################################