<?php
// From https://core.telegram.org/bots/webhooks#the-short-version

class TGFirewall 
{
function start()
{	
	if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)){
		$ip_header = "HTTP_X_FORWARDED_FOR";
	}else if (array_key_exists('REMOTE_ADDR', $_SERVER)) { 
		$ip_header = "REMOTE_ADDR";
	}else if (array_key_exists('HTTP_CLIENT_IP', $_SERVER)) {
		$ip_header = "HTTP_CLIENT_IP";
	}
	$telegram_ip_ranges = [
		['lower' => '149.154.160.0', 'upper' => '149.154.175.255'],
		['lower' => '91.108.4.0',    'upper' => '91.108.7.255'],
	];

	$ip_dec = (float) sprintf("%u", ip2long($_SERVER[$ip_header]));
	$ok=false;

	foreach ($telegram_ip_ranges as $telegram_ip_range) if (!$ok) {
		$lower_dec = (float) sprintf("%u", ip2long($telegram_ip_range['lower']));
		$upper_dec = (float) sprintf("%u", ip2long($telegram_ip_range['upper']));
		if ($ip_dec >= $lower_dec and $ip_dec <= $upper_dec) $ok=true;
	}
	if (!$ok) die('Forbidden');
}
}