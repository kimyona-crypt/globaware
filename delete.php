<?php
session_start();
$servername = "localhost";
$username = "nikita";
$password = "1234niki";
$dbname = "register";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM users WHERE username= '".$_SESSION['username']."'";

if ($conn->query($sql) === TRUE) {
    header("Location: deleted.php");
    session_destroy();
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>