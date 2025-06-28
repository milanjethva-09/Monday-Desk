<?php
// Try to get credentials from environment if set
$host = getenv('DB_HOST') ?: 'localhost';
$db   = getenv('DB_NAME') ?: 'your_db';
$user = getenv('DB_USER') ?: 'your_user';
$pass = getenv('DB_PASS') ?: 'your_pass';
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die('DB Error: '.$conn->connect_error );
}
?>
