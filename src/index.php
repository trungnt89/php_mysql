<?php
$HOSTNAME = "db";
$USERNAME = "root";
$PASSWORD = "example";
$DATABASE = "company";
$conn = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    //echo "Connected to MySQL server successfully!!!";
}


$sql = "INSERT INTO users (name) VALUES('TEST_".date("Y/m/d_h:i:s a", time())."')";
$result = $conn->query($sql);

$sql = 'SELECT * FROM users';
if ($result = $conn->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}

echo json_encode($users);
$conn->close();

?>
