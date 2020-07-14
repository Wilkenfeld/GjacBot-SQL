<?php
class bot {
function curl($url) {
	$curl = curl_init();
	curl_setopt_array($curl, [
	CURLOPT_RETURNTRANSFER => 1,
	CURLOPT_URL => $url,
	CURLOPT_USERAGENT => 'GjacBot',
	CURLOPT_ENCODING =>  '',
	CURLOPT_IPRESOLVE => CURL_IPRESOLVE_V4
	]);
	$response = curl_exec($curl);
	curl_close($curl);
    return $response;
}
function sendMessage($chatID, $testo, $menu = '') {
	global $bot;
	$parsemode = "HTML"; # HTML OR MARKDOWN
	$ipertesto = urlencode($testo);
	if($menu) $url = endpoints['api']. '/sendmessage?chat_id='.$chatID.'&text='.$ipertesto.'&parse_mode='.$parsemode.'&reply_markup={"inline_keyboard":'.$menu.'}';
	else $url = endpoints['api']. '/sendmessage?chat_id='.$chatID.'&text='.$ipertesto.'&parse_mode='.$parsemode;
	$bot->curl($url);
}
function editMessage($chatID, $msgID, $testo, $menu = '') {
	global $bot;
	$parsemode = "HTML"; # HTML OR MARKDOWN
	$ipertesto = urlencode($testo);
	if($menu) $url = endpoints['api']. '/editMessageText?chat_id='.$chatID.'&message_id='.$msgID.'&text='.$ipertesto.'&parse_mode='.$parsemode.'&reply_markup={"inline_keyboard":'.$menu.'}';
	else $url = endpoints['api']. '/editMessageText?chat_id='.$chatID.'&message_id='.$msgID.'&text='.$ipertesto.'&parse_mode='.$parsemode;
	$bot->curl($url);
}
function sendPhoto($chatID, $text, $link, $menu = '') {
	global $bot;
	$parsemode = "HTML"; # HTML OR MARKDOWN
	$photo = urlencode($link);
	$text = urlencode($text);
	if($menu) $url = endpoints['api']. '/sendphoto?chat_id='.$chatID.'&caption='.$text.'&photo='.$photo.'&parse_mode='.$parsemode.'&reply_markup={"inline_keyboard":'.$menu.'}';
	else $url = endpoints['api']. '/sendphoto?chat_id='.$chatID.'&caption='.$text.'&photo='.$photo.'&parse_mode='.$parsemode;
	$bot->curl($url);
}
function forwardMessage($chatID, $fromChannel, $msgID) {
	global $bot;
	$url = endpoints['api']. '/forwardMessage?chat_id='.$chatID.'&from_chat_id='.$fromChannel.'&message_id='.$msgID.'';
	$bot->curl($url);
}
function useDatabase($host, $user, $password, $dbname){
		global $chatID;
		global $username;
		$tabella = "bot";
		$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
		$sth = $conn->prepare('CREATE TABLE IF NOT EXISTS '.$tabella.' ( id int(0) AUTO_INCREMENT, chat_id bigint(0), username varchar(200), status varchar(200), PRIMARY KEY (id))');
		$sth->execute();
	
	if($sth->errorCode() != "00000") {
		$errore = $sth->errorInfo()[2];
	} else {
		$res = $conn->query("select * from $tabella where chat_id = $chatID");
		$count_row = count($res->fetchAll());
		if ( $count_row > 0) {
			$conn->query("update $tabella set page = '' where chat_id = $chatID");
			$u = $res->fetchAll();
		} else {
			$conn->query("insert into $tabella (chat_id, status, username) values ($chatID, '', \"".$username."\")");
		}
	}
}
function is($cmd, $test){
	global $testo;
	if (in_array($testo[0], ['/', '!', '.', '>', '-'])) {
	$cmd = substr($testo, 1, strlen($testo));
	}
	if($cmd === $test) return true; else return false;
}
}

