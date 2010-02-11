<html>
<head>
<title>Point Domains to new IP</title>
</head>
<body>

<h1>DNS IP CHANGER</h1>

<p>This tool create command to quickly change IP address of web sites to new server. So you don't need to wait for DNS propagation.</p>


<form action="ip_change_done.php" method="post">

	<div>
		<label>OLD IP</label>
		<input name="old_ip" type="text" />
	</div>
	
	<div>
		<label>NEW IP</label>
		<input name="new_ip" type="text" />
	</div>

	<div>
		<p>Enter domains separated by new line.</p>
		<textarea name="domains" rows="20" cols="60"></textarea>
	</div>

	<div>
		<input name="subit" type="submit" value="Generate Commands" />
	</div>
	
</form>

</body>
</html>