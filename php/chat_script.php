<?php
$user = $_POST['user'];
$message = $_POST['message'];
$time = date('H:i:s');

$file = "../data/messages.json";

$content = json_decode(file_get_contents($file), true) ?:
	[$user => $message];

$pretty = json_encode($content, JSON_PRETTY_PRINT);
file_put_contents($file, $pretty);
?>