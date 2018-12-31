<?php
require 'vendor/autoload.php'; // include Composer's autoloader
$disease = $_POST['diseasetype'];
$location = $_POST['location'];
$date = $_POST['date'];

$client = new MongoDB\Client('mongodb://fyp_admin:fyp_pwd@cluster0-shard-00-00-oov30.mongodb.net:27017,cluster0-shard-00-01-oov30.mongodb.net:27017,cluster0-shard-00-02-oov30.mongodb.net:27017/test?ssl=true&replicaSet=Cluster0-shard-0&authSource=admin&retryWrites=true');

$db = $client->test;
$collection = $db->flu;

$datainput = array(
	'diseasetype' => $disease,
	'location' => $location,
	'date' => $date
);

$collection->insertOne($datainput);

header('Location: /index.html');
?>