<?php
require 'vendor/autoload.php'; // include Composer's autoloader
$disease = $_POST['diseasetype'];
$location = $_POST['location'];
$date = $_POST['date'];

$client = new MongoDB\Client('mongodb+srv://fyp_admin:fyp_pwd@cluster0-oov30.mongodb.net/test?retryWrites=true');

$db = $client->test;
$collection = $db->maurihealth;

$datainput = array(
	'diseasetype' => $disease,
	'location' => $location,
	'date' => $date
);

$collection->insertOne($datainput);

header('Location: /index.html');
?>