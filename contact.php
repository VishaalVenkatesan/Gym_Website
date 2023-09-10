<?php
$servername = "95.217.119.36";
$username = "ggossahs_project";
$password = "webtech@2023";
$dbname = "ggossahs_webtech";

$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$type = $_POST['type'];
$txtMessage = $_POST['txtMessage'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO enquiry (name, email, phone,type,message)
VALUES ('$txtName', '$txtEmail', $txtPhone, '$type', '$txtMessage')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.html");

    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
