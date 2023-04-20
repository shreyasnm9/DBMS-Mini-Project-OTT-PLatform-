
<!DOCTYPE html>
<html>
    <head>
    <title>Report</title>
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
    <Body>
    <div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="http://localhost/ott/Adminhome.php" class="w3-bar-item w3-button w3-padding-large"><img src="Homelogo.png" width="28" height="28" title="Home" alt="Home" /></a>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">Sort<i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="daily.php" class="w3-bar-item w3-button">Daily</a>
        <a href="monthly.php" class="w3-bar-item w3-button">Monthly</a>
        <a href="yearly.php" class="w3-bar-item w3-button">Yearly</a>
      </div>
    </div>
    <a href="http://localhost/ott/report.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Report</a>
    <a href="http://localhost/ott/deluser.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Delete User</a>
    <a href="http://localhost/ott/home.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Logout</a>
  </div>
</div>
<br></br>
<br></br>
    </Body>   
</html>
<?php
$servername = "localhost";
$Username = "root";
$password = "";
$dbname = "ott";

// Create connection
$conn = new mysqli($servername, $Username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$stmt = $conn->prepare("CALL SP_yearly()");
$stmt->execute();

echo "<table border='0' style='margin:0 auto'>";
echo "<tr>";
echo "<th style='border: 1px solid black;'>username</th>";
echo "<th style='border: 1px solid black;'>fullname</th>";
echo "<th style='border: 1px solid black;'>email</th>";
echo "<th style='border: 1px solid black;'>phone</th>";
echo "<th style='border: 1px solid black;'>age</th>";
echo "<th style='border: 1px solid black;'>country</th>";
echo "<th style='border: 1px solid black;'>sub_id</th>";
echo "<th style='border: 1px solid black;'>Sname</th>";
echo "<th style='border: 1px solid black;'>price</th>";
echo "<th style='border: 1px solid black;'>quality</th>";
echo "<th style='border: 1px solid black;'>no_of_devices</th>";
echo "<th style='border: 1px solid black;'>start_date</th>";
echo "<th style='border: 1px solid black;'>end_date</th>";
echo "</tr>";
// check if there are any rows
    $stmt->store_result();
    if ($stmt->num_rows > 0){
      $stmt->bind_result($username,$fullname,$email,$phone,$age,$country,$sub_id,$Sname,$price,$quality,$no_of_devices,$start_date,$end_date);
        // Print the result
      while($stmt->fetch()) {
        echo "<tr>";
        echo "<td style='border: 1px solid black;'>" . $username . "</td>";
        echo "<td style='border: 1px solid black;'>" . $fullname . "</td>";
        echo "<td style='border: 1px solid black;'>" . $email . "</td>";
        echo "<td style='border: 1px solid black;'>" . $phone . "</td>";
        echo "<td style='border: 1px solid black;'>" . $age . "</td>";
        echo "<td style='border: 1px solid black;'>" . $country . "</td>";
        echo "<td style='border: 1px solid black;'>" . $sub_id . "</td>";
        echo "<td style='border: 1px solid black;'>" . $Sname . "</td>";
        echo "<td style='border: 1px solid black;'>" . $price . "</td>";
        echo "<td style='border: 1px solid black;'>" . $quality . "</td>";
        echo "<td style='border: 1px solid black;'>" . $no_of_devices . "</td>";
        echo "<td style='border: 1px solid black;'>" . $start_date . "</td>";
        echo "<td style='border: 1px solid black;'>" . $end_date . "</td>";
        echo "</tr>";
    }
  }
  else {
    echo "0 results";
}
$conn->close();
?>
