<!DOCTYPE html>
<html>
    <head>
    <title>Movies</title>
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
    <!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="http://localhost/ott/home.php" class="w3-bar-item w3-button w3-padding-large"><img src="Homelogo.png" width="28" height="28" title="Home" alt="Home" /></a>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">Categories<i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="http://localhost/ott/Movies.php" class="w3-bar-item w3-button">Movies</a>
        <a href="http://localhost/ott/TV.php" class="w3-bar-item w3-button">TV-Shows</a>
      </div>
    </div>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">language<i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="http://localhost/ott/Moviesk.php" class="w3-bar-item w3-button">Kannada</a>
        <a href="http://localhost/ott/Moviese.php" class="w3-bar-item w3-button">English</a>
        <a href="http://localhost/ott/Moviesh.php" class="w3-bar-item w3-button">Hindi</a>
        <a href="http://localhost/ott/Moviest.php" class="w3-bar-item w3-button">Telugu</a>
      </div>
    </div>
  </div>
</div><br><br><br>
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ott";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//$query = "SELECT * FROM movie";
$stmt = $conn->prepare("CALL SP_telugu()");
$stmt->execute();

//$result = mysqli_query($conn, 'CALL SP_Movie()');
//$row1 = mysqli_fetch_row($result);
//echo $row1[0];
//$counter = ;
//$value1 = $column[0];
echo "<table border='0' style='margin:0 auto'>";
echo "<tr>";
echo "<th style='border: 0px solid black;'></th>";
echo "</tr>";
// check if there are any rows
$stmt->store_result();
if ($stmt->num_rows > 0) {
    // output data of each row
    $stmt->bind_result($Mov_id,$Mname,$genre,$mlanguage,$mminutes,$year_of_release,$mposter,$mtrailer);
        // Print the result
    while($stmt->fetch()) {
        echo "<tr>";
        $mid = $Mov_id;
        echo "<td style='display: inline-block;'>'<img src=" .$mposter." width='200' height='200' >'</td>";
        echo "<td style='display: inline-block;'> <br>Name:" . $Mname . "<br>Genre: " . $genre. "<br>language: " . $mlanguage. "<br>Minutes: " . $mminutes. "<br>Year: " . $year_of_release . "<br></td>";
        echo "<tr>";
        echo "<td style='border: 0px solid black;'><a href='http://localhost/ott/Movies.php?mid=".$mid."'class='w3-bar-item w3-button w3-padding-large w3-hide-small'>Watch Now</td>";
        echo "</tr>";
        echo "</tr>";
    }
}
 
else {
    echo "0 results";
}
$conn->close();
?>
