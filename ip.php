<?php

// $ip = $_SERVER["REMOTE_ADDR"];
// $ip2 = $_SERVER["HTTP_X_FORWARDED_FOR"];

function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}


$user_ip = getUserIP();

echo $user_ip;

$arr= explode(".",$ip);
if(($arr[0]!='172') || ($arr[1]<'16') || ($arr[1]> '120' ))
{

	$today = date("F j, Y, g:i a");  
	$fp=fopen("log.txt","a+");
	fwrite($fp, $ip."   ".$today."    OUTSIDER \n");
	fclose($fp);
	echo $ip2;
	print_r($arr);
	die("SORRY ! You are either an Outsider or have to change your proxy settings");
}
?>