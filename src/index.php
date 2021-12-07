<?php
echo "HelloWorld!";
$HOSTNAME = "db";
$USERNAME = "root";
$PASSWORD = "example";
$DATABASE = "company";
$conn = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL server successfully!!!";
}
?>
