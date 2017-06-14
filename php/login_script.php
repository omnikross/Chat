<?php
$name = $_POST['user'];
$password = $_POST['pass'];
if(!isset($name, $password) || empty($name) || empty($password)){
	http_response_code(400);
	die();
}
$file = "../data/users.json";
$users = json_decode(file_get_contents($file), true);

if(isset($users[$name])) {
	if($users[$name] != $password){
		http_response_code(400);
	}
} 
else {
	$users[$name] = $password;
	file_put_contents($file, json_encode($users, JSON_PRETTY_PRINT));
}
?>
