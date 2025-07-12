<?php
define('DB_SERVER', '89.117.188.1');
define('DB_USERNAME', 'u704466700_test_office');
define('DB_PASSWORD', 'PA$$w0rd1124');
define('DB_NAME', 'u704466700_test_office');

// Create connection
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>