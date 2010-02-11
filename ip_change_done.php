<?php

$old_ip = trim($_POST['old_ip']);
$new_ip = trim($_POST['new_ip']);

if (strlen($old_ip) < 8)
{
	echo 'You must enter old IP address';
	exit;
}

if (strlen($new_ip) < 8)
{
	echo 'You must enter new IP address';
	exit;
}

if (!validateIpAddress($old_ip))
{
	echo 'Invalid IP adddress : ' . $old_ip;
	exit;
}

if (!validateIpAddress($new_ip))
{
	echo 'Invalid IP adddress : ' . $new_ip;
	exit;
}

$domains_txt = $_POST['domains'];

$domains = explode("\n",$domains_txt);

$num_domains = count($domains);

echo '<pre>';

for ($i=0;$i<$num_domains;$i++)
{
	$domain = trim($domains[$i]);
	
	if (strlen($domain) > 3)
	{
		echo "replace $old_ip $new_ip -- /var/named/$domain.db\n";
	}
}

echo "service named restart\n";




##############################

function validateIpAddress($ip_addr)
{
  //first of all the format of the ip address is matched
  if(preg_match("/^(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})$/",$ip_addr))
  {
    //now all the intger values are separated
    $parts=explode(".",$ip_addr);
    //now we need to check each part can range from 0-255
    foreach($parts as $ip_parts)
    {
      if(intval($ip_parts)>255 || intval($ip_parts)<0)
      return false; //if number is not within range of 0-255
    }
    return true;
  }
  else
    return false; //if format of ip address doesn't matches
}