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
	if(!isset($_GET["admin"])) {
		include __DIR__ . '/../parts/'. $name . '.php';
	}
}

function getUserData($word, $nbr) {
	$data = file_get_contents('../data/user.json', FILE_USE_INCLUDE_PATH);
	$dataJson = json_decode($data, true);
	if($word == 'identity') {
		$name = $dataJson['name'];
		$first_name = $dataJson['first_name'];
		echo $name.' '.$first_name;
	} if($word == 'occupation') {
		$name = $dataJson['name'];
		$occupation = $dataJson['occupation'];
		echo $occupation;
	} if($word == 'experiences') {
		$experiences = $dataJson['experiences'];
		echo $experiences[$nbr]['year'].' '.$experiences[$nbr]['company'];
	}
}

function contact() {
	$contact = array('lastName' => $_POST['last_name'], 'firstName' => $_POST['first_name'], 'email' => $_POST['email'], 'message' => $_POST['message']);
	echo ' '.$_POST['last_name'].' '.$_POST['first_name'].'!';
	$file = '../data/last_message.json';
	if (!file_exists($file)) {
		$handle = fopen("../data/last_message.json", "w+");
	}
	$current = file_get_contents($file, FILE_USE_INCLUDE_PATH);
	$current = json_encode($contact, true);
	file_put_contents($file, $current);
}

function lastMessage() {
	$data = file_get_contents('../data/last_message.json', FILE_USE_INCLUDE_PATH);
	$dataJson = json_decode($data, true);
	$name = $dataJson['lastName'];
	$first_name = $dataJson['firstName'];
	$mail = $dataJson['email'];
	$message = $dataJson['message'];
	echo 'From '.$name.' '.$first_name;
	echo '<br>';
	echo $mail;
	echo '<br>';
	echo 'Message:<br>'.$message;
}

?>
