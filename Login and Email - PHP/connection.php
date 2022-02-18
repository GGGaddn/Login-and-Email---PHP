<?php

try {
	$pdo = new PDO('mysql:dbname=users;  host=localhost', 'oyo3', 'root');
} catch (PDOException $e) {
	die($e->getMessage());
}