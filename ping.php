<?php
$ip = $_GET['ip'];
system("ping -c 2 ".$ip);
?>
<form>
<input name="ip">
<input type="submit">
</form>
