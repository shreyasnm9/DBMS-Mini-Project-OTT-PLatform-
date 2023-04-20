<!DOCTYPE html>
<html lang="en">

<head>
<title>Add Movie</title>
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
    <center>
    <div class="wrapper login">
        <div class="container">
            <div class="col-left">
                <div class="login-text">
                    
                </div>
            </div>
            <div class="col-right">
                <div class="login-form">
                    <h2 style="color:white;">Enter Movie Details</h2>
                    <form action="movieaddserver.php" method="post">
                        <p style="color:white;"> <label style="text-align: left;">Movie ID</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Mov_id" maxlength="4" placeholder="Enter the Movie ID" required></p>
                        <p style="color:white;"> <label style="text-align: left;">Movie name<span></span></label> <input type="text" name="Mname"placeholder="Enter Movie Name" required> </p>
                        <p style="color:white;"> <label>Genre<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></label> <input type="text"name="genre" placeholder="Enter the genre" required> </p>
                        <p style="color:white;"> <label style="text-align: left;">Language<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></label><input type="text" name="mlanguage" placeholder="Enter the Language" required> </p>
                        <p style="color:white;"> <label>Minutes<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></label> <input type="number" name="mminutes" placeholder="Enter movie duration in minutes" required> </p>
                        <p style="color:white;"> <label>Year of release<span></span></label> <input type="number" name="year_of_release" placeholder="Enter the year of release" required> </p>
                        <button style="color: black;" type="submit" class = "btn" name="movieadd">Add</button>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</center>
</body>

</html>