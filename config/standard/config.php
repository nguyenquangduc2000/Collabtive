<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$db_pass = substr($url["path"], 1);
$db_host = $url["host"];
$db_user = $url["user"];
$db_pass = $url["pass"];

$conn = new mysqli($db_host, $db_user, $db_pass, $db_pass);
?>
