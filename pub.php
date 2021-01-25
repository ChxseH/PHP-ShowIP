<?php
$realIP = file_get_contents("https://ipecho.net/plain");
echo $realIP;
?>