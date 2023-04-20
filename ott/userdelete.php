<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ott";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['dele'])){
    $selected = $_POST['selected'];
    foreach($selected as $id){
        $sql = "DELETE FROM owns WHERE username = '$id'";
        $conn->query($sql);
    }
}

$conn->close();

// redirect to the main page
header("Location: deluser.php");
?>
