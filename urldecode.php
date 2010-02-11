<html>
<head>
<title>URL Decode</title>
</head>
<body>

<form action="" method="post">
<p>Enter urlencoded text</p>
<textarea rows="5" cols="60" name="encoded_text"></textarea>
<input type="submit" name="submit" value="Decode">
</form>

<?php

if (isset($_POST['submit']))
{
    $encoded_text = $_POST['encoded_text'];
    $decoded_text = urldecode($encoded_text);
    echo '<p>Decoded Text</p>';
    echo '<textarea rows="5" cols="60" name="decoded_text">' . $decoded_text .'</textarea>';
}
?>

</body>
</html>
