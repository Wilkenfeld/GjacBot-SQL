<?php
define("token", isset($_GET["api"]) ? $_GET["api"] : null);
if(token == null) return;

define("update", json_decode(file_get_contents("php://input"),true));
define("endpoints", ["api" => "https://api.telegram.org/bot".token,
"file" => "https://api.telegram.org/file/bot".token."/"]);
define("cfg", ["id" => 766254943]#! Inserisci qui il tuo Id se hai bisogno di usare le funzioni admin ( @UsInfoBot, funzioni in sviluppo )
);

require_once "vars.php";
require_once "funzioni.php";
require_once "database.php";
require_once "comandi.php";

?>