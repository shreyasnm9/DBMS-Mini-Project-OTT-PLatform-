<!DOCTYPE html>
<html>
    <head>
    <title>Delete User</title>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="family.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
    </head>
    <body>
    <div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="http://localhost/ott/Adminhome.php" class="w3-bar-item w3-button w3-padding-large"><img src="Homelogo.png" width="28" height="28" title="Home" alt="Home" /></a>
      <a href="http://localhost/ott/report.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Report</a>
      <a href="http://localhost/ott/deluser.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Delete User</a>
    </div>
  </div>
</div>
<br></br><br></br>
</body>
</html>
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

$sql = "SELECT * FROM owns ORDER BY sub_id";
$result = $conn->query($sql);


echo "<form method='post' action='userdelete.php'>";
echo "<table border='0' style='margin:0 auto'>";
echo "<tr>";
echo "<th style='border: 1px solid black;'>Username</th>";
echo "<th style='border: 1px solid black;'>Sub_id</th>";
echo "<th style='border: 1px solid black;'>Start_date</th>";
echo "<th style='border: 1px solid black;'>End_date</th>";
echo "</tr>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td style='border: 1px solid black;'>" . $row["username"] . "</td>";
        echo "<td style='border: 1px solid black;'>" . $row["sub_id"] . "</td>";
        echo "<td style='border: 1px solid black;'>" . $row["start_date"] . "</td>";
        echo "<td style='border: 1px solid black;'>" . $row["end_date"] . "</td>";
        echo "<td style='border: 1px solid black;'><input type='checkbox' name='selected[]' value='". $row["username"] . "'></td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}
echo "<tr style='text-align: center;'>";
echo "<td colspan='8'>" . "<input type='submit' name = 'dele' value='Delete'/> ". "</td>";
echo "</tr>";
echo "</table>";
echo "</form>";

$conn->close();
?>
