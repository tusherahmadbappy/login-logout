<?php

$host = 'localhost';
$db = 'registration';
$user = 'root';
$password = 'Tusher1023';

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
	$pdo = new PDO($dsn, $user, $password);

	if ($pdo) {
		return $pdo;
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}