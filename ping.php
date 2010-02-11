<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
<head>
<title>IP Tools</title>
</head>

<body>


<p>Your IP: <?php echo $_SERVER['REMOTE_ADDR']; ?></p>

<h2>Ping Results:</h2>


<p>

<?php

$host = $_GET['host'];

$msg = '';
if (! $msg .= trim(nl2br(`ping -c5 '$host'`))) {
  $msg .= "Ping failed. Host may not be active.";
}

echo $msg;

?>

</p>

</body>
</html>