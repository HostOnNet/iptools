<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
<head>
<title>IP Tools</title>
</head>

<body>

<?php

$ip = $_SERVER['REMOTE_ADDR'];
$locale = @file("http://api.hostip.info/get_html.php?ip=".$ip . "&position=true");

 ?>

<p>Your IP: <?php echo $ip; ?></p>
<p><?php echo $locale['0']; ?></p>
<img src="http://api.hostip.info/flag.php?ip=<?php echo $ip; ?>" border="0"><br/>


<ul>
<li><a href="urldecode.php">urldecode</a></li>
<li><a href="time_unix2human.php">Time Unix to Human Readable Format</a></li>
<li><a href="hms2sec.php">Convert HH:MM:SS to Sec</a></li>
<li><a href="download_youtube_video.php">Download Youtube Video</a></li>
<li><a href="ip_change.php">Change IP address of sites in cpanel server for moving sites to new server</a></li>
</ul>


<h1>IP WHOIS</h1>

<form action="whois.php" method="GET">
IP: <input type="text" name="ip">
<input type="submit" value="Whois">
</form>

<H1>DOMAIN WHOIS</h1>

<form action="whois.php" method="GET">
Domain: <input type="text" name="ip">
<input type="submit" value="Whois">
</form><br>

<H1>PING</h1>

<form action="ping.php" method="GET">
Enter an IP or host address:<br>
<input type="text" name="host">
<input type="submit" value="Ping">
</form>


</body>
</html>
