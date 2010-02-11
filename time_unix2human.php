<form method="post">

    <div>
        Unix Time Stamp
    </div>

    <div>
        <input type="text" name="unix_time_stamp" value="" />
    </div>
    
    <div>
        <input type="submit" name="submit" value="Convert Time >>" />
    </div>

</form>

<style>
    form div {
        margin:0.5em 0;
    }
</style>


<?php

if (isset($_POST['submit']))
{
    $unix_time_stamp = $_POST['unix_time_stamp'];
    $unix_time_stamp = trim($unix_time_stamp);
    echo "<p>Unix Time : $unix_time_stamp is </p>";
    $time = date('d M Y h:i:s a D',$unix_time_stamp);
    echo '<h1>' . $time . '</h1>';   
}

?>