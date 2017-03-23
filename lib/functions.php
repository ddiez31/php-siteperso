<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/

function getContent() {
	if(isset($_GET['home'])) {
		include __DIR__.'/../pages/home.php';
	} if(isset($_GET['bio'])) {
		include __DIR__.'/../pages/bio.php';
	} if(isset($_GET['contact'])) {
		include __DIR__.'/../pages/contact.php';
	} if(empty($_GET)) {
		include __DIR__.'/../pages/home.php';
	} if(isset($_GET['admin'])) {
		include __DIR__.'/../public/admin.php';
	} if(isset($_GET['save'])) {
		include __DIR__.'/../public/save.php';
	}
}

function getPart($name) {
	if(!isset($_GET["admin"]) && !isset($_GET["save"])) {
		include __DIR__ . '/../parts/'. $name . '.php';
	}
}

function getUserData() {
	$data = file_get_contents('../data/user.json', FILE_USE_INCLUDE_PATH);
	$dataJson = json_decode($data, true);
	echo $data;
	echo '<br>';
	var_dump($dataJson);
}

function identity() {
	$data = file_get_contents('../data/user.json', FILE_USE_INCLUDE_PATH);
	$dataJson = json_decode($data, true);
	$name = $dataJson['name'];
	$first_name = $dataJson['first_name'];
	echo $name.' '.$first_name;
}

function occupation() {
	$data = file_get_contents('../data/user.json', FILE_USE_INCLUDE_PATH);
	$dataJson = json_decode($data, true);
	$occupation = $dataJson['occupation'];
	echo $occupation;
}

function experiences($nbr) {
	$data = file_get_contents('../data/user.json', FILE_USE_INCLUDE_PATH);
	$dataJson = json_decode($data, true);
	$experiences = $dataJson['experiences'];
	echo $experiences[$nbr]['year'].' '.$experiences[$nbr]['company'];
}

function contact() {
	echo 'ok';
}

function lastMessage() {
	// $data = file_get_contents('../data/last_message.json', FILE_USE_INCLUDE_PATH);
	// $dataJson = json_decode($data, true);
	// echo $dataJson['last_name'];
	// foreach ($dataJson as $key => $value) {
	// 	echo $key.' '.$value;
	// }
}

?>
