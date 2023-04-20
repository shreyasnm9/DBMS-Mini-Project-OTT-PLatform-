<!DOCTYPE html>
<html>
    <head>
    <title>Update Movie</title>
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
    <body background = "images/background.jpeg"; background-size 100% 100%>
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
$servername="localhost";
$username="root";
$password="";
$database_name="ott";

$conn=mysqli_connect($servername,$username,$password,$database_name);
//echo "Test";
if(!$conn)
{
    die("Connection Failed:" . mysqli_error());
}
$name = $_GET['mid']; 
$sql_query="SELECT * FROM movie where Mov_id = '$name';";
$result = mysqli_query($conn, $sql_query);
$row = $result->fetch_assoc();
$num= mysqli_num_rows($result);
if ($num >0 ){ ?>
<html>
<Body background = "background.jpeg"; background-size 100% 100%>
    <center>
    <form action="movieupdatesave.php" method="post">
    <p style="color:white;"> <label style="text-align: left;">Movie name<span></span></label> <input type="text" name="Mname" value="<?php echo $row['Mname']?>"> </p>
    <p style="color:white;"> <label>Genre<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></label> <input type="text"name="genre" value="<?php echo $row['genre']?>" required> </p>
    <p style="color:white;"> <label style="text-align: left;">Language<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></label><input type="text" name="mlanguage" value="<?php echo $row['mlanguage']?>" required> </p>
    <p style="color:white;"> <label>Minutes<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></label> <input type="number" name="mminutes" value="<?php echo $row['mminutes']?>" required> </p>
    <p style="color:white;"> <label>Year of release<span></span></label> <input type="number" name="year_of_release" value="<?php echo $row['year_of_release']?>" required> </p>
    <p style="color:white;"> <label>Movie Poster<span></span></label> <input type="text" name="poster" value="<?php echo $row['mposter']?>" required> </p>
    <p style="color:white;"> <input type="hidden" name="Mid" value="<?php echo $name?>"> </p>
    <button style="color: black;" type="submit" class = "btn" name="movieupdate" >Update</button>
    </form>
    <center>
</Body>
</html>
<?php    
}
mysqli_close($conn);
?>