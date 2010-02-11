<html>
<head>
<title>Youtube Video Download</title>
</head>
<body>
<h1>Download Youtube Video</h1>

<form action="" method="post">
Url : <input type="text" name="url">
<input type="submit" name="submit" value="Get Download Link">
</form>

<?php

if (isset($_POST['url']))
{
	require 'include/youtube.php';
	$download_link = get_youtube_flv_url($_POST['url']);
	echo '<p><a href="' . $download_link . '">' . $download_link . '</a></p>';
}


?>

</body>
<html>


