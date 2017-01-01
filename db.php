<?php

try{
	$db = new PDO("sqlite:chat.db");
	//echo "good";
}
catch(Exception $e){
	echo $e->getMessage();
}

function formatDate($x){
	$date = new DateTime($x, new DateTimeZone('Etc/GMT+6'));
	$date->setTimezone(new DateTimeZone('Etc/GMT+3'));
	return $date->format('g:i a');
}