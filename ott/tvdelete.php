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

if(isset($_POST['deltv'])){
    $selected = $_POST['selected'];
    foreach($selected as $id){
        $sql = "DELETE FROM tv WHERE TV_id = '$id'";
        $conn->query($sql);
    }
}

$conn->close();

// redirect to the main page
header("Location: tvdel.php");
?>
