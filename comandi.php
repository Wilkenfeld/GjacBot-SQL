<?php
########## ESEMPI DI RISPOSTE ##########
if($bot->is($cmd,'start')) { 
	$menu = '[ [{"text": "Canale 💎", "url": "https://t.me/lucadevelopments"}, {"text": "PHP Speed", "callback_data": "speedtest"}] ]'; #! URL per inserire un link, callback_data per inserire un comando
	$bot->sendMessage($chatID, "<b>GjacBot v4</b>\nComandi disponibili:\n/forward (Devi aggiungere il bot al canale dal quale prendi il messaggio),\n/photo\n/photoinline\n/start", $menu);
}

if($bot->is($cmd,'photoinline')) { 
	$menu = '[ [{"text": "Canale 💎", "url": "https://t.me/lucadevelopments"}] ]'; #! URL per inserire un link, callback_data per inserire un comando
	$bot->sendPhoto($chatID, 'Ciao!', "https://www.google.it/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png", $menu); 
}

if($bot->is($cmd,'photo')) { 
	$bot->sendPhoto($chatID, 'ciao', "https://www.google.it/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png");
}

if($bot->is($cmd,'forward')) { 
	$bot->forwardMessage($chatID, '-1001483330277', '368'); #! Ovviamente non lo manderà se il bot non è nel canale di input
} 

if($cbdata == 'start') $bot->editMessage($chatID, $msgID, "Ciao bello!");

if($cbdata == 'speedtest') {
$start = microtime(true);
$bot->editMessage($chatID, $msgID, "msg.");
$end = microtime(true);
$bot->editMessage($chatID, $msgID, $end - $start);
}

########################################
