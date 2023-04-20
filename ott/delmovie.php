<!DOCTYPE html>
<html>
    <head>
    <title>Home</title>
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
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">Add<i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="Movieadd.php" class="w3-bar-item w3-button">Movies</a>
        <a href="addtv.php" class="w3-bar-item w3-button">TV-Shows</a>
      </div>
    </div>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">Delete<i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="delmovie.php" class="w3-bar-item w3-button">Movies</a>
        <a href="tvdel.php" class="w3-bar-item w3-button">TV-Shows</a>
      </div>
    </div>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">Update<i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="upmovie.php" class="w3-bar-item w3-button">Movies</a>
        <a href="tvup.php" class="w3-bar-item w3-button">TV-Shows</a>
      </div>
      </div>
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

$sql = "SELECT * FROM movie";
$result = $conn->query($sql);


echo "<form method='post' action='moviedelete.php'>";
echo "<table border='0' style='margin:0 auto'>";
echo "<tr>";
echo "<th style='border: 1px solid black;'>Mov_ID</th>";
echo "<th style='border: 1px solid black;'>Movie Name</th>";
echo "<th style='border: 1px solid black;'>Genre</th>";
echo "<th style='border: 1px solid black;'>Language</th>";
echo "<th style='border: 1px solid black;'>Minutes</th>";
echo "<th style='border: 1px solid black;'>Year</th>";
echo "<th style='border: 1px solid black;'>Poster</th>";
echo "<th style='border: 1px solid black;'>Option</th>";
echo "</tr>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td style='border: 1px solid black;'>" . $row["Mov_id"] . "</td>";
        echo "<td style='border: 1px solid black;'>" . $row["Mname"] . "</td>";
        echo "<td style='border: 1px solid black;'>" . $row["genre"] . "</td>";
        echo "<td style='border: 1px solid black;'>" . $row["mlanguage"] . "</td>";
        echo "<td style='border: 1px solid black;'>" . $row["mminutes"] . "</td>";
        echo "<td style='border: 1px solid black;'>" . $row["year_of_release"] . "</td>";
        echo "<td style='border: 1px solid black;'>" . $row["mposter"] . "</td>";
        echo "<td style='border: 1px solid black;'><input type='checkbox' name='selected[]' value='". $row["Mov_id"] . "'></td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}
echo "<tr style='text-align: center;'>";
echo "<td colspan='8'>" . "<input type='submit' name = 'del' value='Delete'/> ". "</td>";
echo "</tr>";
echo "</table>";
echo "</form>";

$conn->close();
?>
