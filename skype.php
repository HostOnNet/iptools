<?php

/*
This program is to read chat log of skype with opera speak
*/

if (isset($_POST['body']))
{
    $quotes = get_magic_quotes_gpc();

	$text = $_POST['body'];
    
    if ($quotes)
    {
        $text = stripslashes($text);
    }

    $lines = explode("\n", $text);
    echo '<pre>';
    
    foreach ($lines as $line)
    {
		$line = preg_replace('/\[[^\]]+\]/i', '', $line);
		$line = wordwrap($line, 80, "\n");
    	echo $line . "\n";
    }
    
	echo '</pre>';
    echo '<br /><br /><a href="/post.php">Back</a>';
    
}
else
{
    echo <<<EOT
		<form action="" method="post">
			<textarea name="body" rows="20" cols="80"></textarea>
			<br />
			<input type="submit" name="submit" value="Submit">
		</form>
EOT;

}