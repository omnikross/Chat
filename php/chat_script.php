<?php
session_start();
$user = $_SESSION['user'];
$message = $_POST['message'];
$time = date('H:i:s');

$file = "../data/messages.json";
$content = json_decode(file_get_contents($file), true);

if (!empty($message)) {
	$content[] = array('time' => $time, 'user' => $user, 'message'  => $message);

	$new_content = array();
	$i = 0;
	foreach($content as $key => $id) {
		$new_id = $id;
		$new_id['id'] = $i;
		$new_content[$id['user'] ] = $new_id;
		$i++;
	}
	file_put_contents($file, json_encode($new_content, JSON_PRETTY_PRINT),FILE_APPEND);
}
echo (json_encode($new_content));
?>