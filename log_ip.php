<?php
$ip = $_SERVER['REMOTE_ADDR'];
$token = "8020526650:AAHT_YxnGZBz78uGsn-wY6pciy2zvEzINkc"; // توکن رباتت رو اینجا بذار
$chat_id = "482842367"; // Chat ID خودت رو اینجا بذار
$message = "IP: $ip";
$url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$message";
file_get_contents($url);
echo "IP logged!";
?>
