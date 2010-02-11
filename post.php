<?php

if (isset($_POST['body']))
{
    $quotes = get_magic_quotes_gpc();

	$text = $_POST['body'];
    
    if ($quotes)
    {
        $text = stripslashes($text);
    }

	$text = wordwrap($text, 80, "\n");
    
	echo '<pre>';
    echo $text;
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