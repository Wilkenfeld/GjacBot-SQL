<?php
$token = "TOKEN"; #Il token da @BotFather
$sito = "https://tuosito.it/bot.php"; # Il percorso del file bot.php

######################## NON MODIFICARE ########################
$webhook = 'https://api.telegram.org/bot'.$token.'/setwebhook?url='.$sito.'?api='.$token;
$ch = curl_init("$webhook");
curl_exec($ch);
######################## NON MODIFICARE ########################