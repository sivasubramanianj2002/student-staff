<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'student_staff_integration';

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}