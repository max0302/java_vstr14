<?php
include_once 'NastyaApi.php';
$token = '';
$action = '';
if (isset($_POST['token'])) {
	$token = $_POST['token'];
	$action = $_POST['action'];
} else {
	$token = $_GET['token'];
	$action = $_GET['action'];
}

$api = new NastyaApi($token, $action);
$api->returnResponse();
if ($api->check_token()) {
	echo json_encode($api->returnResponse(), JSON_UNESCAPED_UNICODE);
} else {
	echo 'false';
}