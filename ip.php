<?php

$ip = get_real_ip();
$locale = @file("http://api.hostip.info/get_html.php?ip=".$ip . "&position=true");

function get_real_ip()
{
    if (isset($_SERVER["HTTP_CLIENT_IP"]))
    {
        return $_SERVER["HTTP_CLIENT_IP"];
    }
    elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
    {
        return $_SERVER["HTTP_X_FORWARDED_FOR"];
    }
    elseif (isset($_SERVER["HTTP_X_FORWARDED"]))
    {
        return $_SERVER["HTTP_X_FORWARDED"];
    }
    elseif (isset($_SERVER["HTTP_FORWARDED_FOR"]))
    {
        return $_SERVER["HTTP_FORWARDED_FOR"];
    }
    elseif (isset($_SERVER["HTTP_FORWARDED"]))
    {
        return $_SERVER["HTTP_FORWARDED"];
    }
    else
    {
        return $_SERVER["REMOTE_ADDR"];
    }
}
 
?>

<p>Your Public IP: <?php echo $_SERVER["REMOTE_ADDR"]; ?></p>
<p>Your Real IP: <?php echo $ip; ?></p>
<p><?php echo $locale['0']; ?></p>
<img src="http://api.hostip.info/flag.php?ip=<?php echo $ip; ?>" border="0"><br/>
