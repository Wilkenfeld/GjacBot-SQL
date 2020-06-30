<?php
$token = "TOKEN_BOT"; # Il token da @BotFather
$sito = "https://tuosito.it/bot.php"; # Il percorso del file bot.php

## ## ## ## ## ## ## ## ## ## ## ## ## ## ## ## ## ## ## ## ## ## ##
file_get_contents('https://api.telegram.org/bot'.$token.'/setwebhook?url='.$sito.'?api='.$token);