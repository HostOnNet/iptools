<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
<head>
<title>IP Tools</title>
</head>

<body>

<p>Your IP: <?php echo $_SERVER['REMOTE_ADDR']; ?></p>


<form action="whois.php" method="GET">
IP: <input type="text" name="ip">
<input type="submit" value="Whois">
</form>

<?php

$ip = $_GET['ip'];
$ip = strtolower(trim($ip));

$match = preg_match('/^[a-z0-9-.]+$/i',$ip);

if (!$match)
{
	mail("info@bizhat.com","invalid whois", $_GET['ip']);
	exit;
}


$cmd = '/usr/bin/whois ' . $ip;
exec("$cmd",$exec_result);

$return_data = '';
$return_data_all = '';

for ($i=0;$i<count($exec_result);$i++) {
	$return_data = $exec_result[$i];
	$return_data = trim($return_data);
	$return_data = $return_data . "<br>";
	$return_data_all = $return_data_all . $return_data;
}

echo "<pre>";
echo $return_data_all;
echo "</pre>";
