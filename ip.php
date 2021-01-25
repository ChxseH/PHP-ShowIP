<?php
// My local network breaks this script, so just forward to ipecho.
if($_SERVER["REMOTE_ADDR"]=='192.168.86.1'){
header("Location: https://ipecho.net/plain");
exit();
}
else{
echo $_SERVER['REMOTE_ADDR'];
}
?>