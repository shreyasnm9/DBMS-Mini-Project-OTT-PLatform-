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
    <a href="http://localhost/ott/homenew.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Logout</a>
  </div>
</div>
<div class="w3-container w3-content w3-center w3-padding-64 w3-white" style="max-width:800px" id="band">
    <h2 class="w3-wide">Recently Added</h2>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p><br>Arrival</br></p>
        <img src="images/ar.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:57%"><br>
        <button class="w3-button w3-black w3-margin-bottom" onclick="window.open('https://www.youtube.com/watch?v=tFMo3UJ4B4g')">Watch Now</button>
      </div>
      <div class="w3-third">
        <p>Bullet<br>Train </br></p>
        <img src="images/bt.jpeg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%"><br>
        <button class="w3-button w3-black w3-margin-bottom" onclick="window.open('https://www.youtube.com/watch?v=0IOsk2Vlc4o')">Watch Now</button>
      </div>
      <div class="w3-third">
        <p>Interstellar<br></br></p>
        <img src="images/in.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%"><br>
        <button class="w3-button w3-black w3-margin-bottom" onclick="window.open('https://www.youtube.com/watch?v=zSWdZVtXT7E')">Watch Now</button></br>
      </div>
    </div>
  </div>
  <div class="w3-black" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">TV-Shows</h2>
      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <div class="w3-container w3-white">
            <p><img src="images/wd.jpeg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%"><br>Daily</br></p>
            <button class="w3-button w3-red w3-margin-bottom" onclick="window.open('https://www.youtube.com/watch?v=sfAc2U20uyg')">Watch Now</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <div class="w3-container w3-white">
            <p><img src="images/got.jpeg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:68%"><br>Game of Thrones</br></p>
            <button class="w3-button w3-red w3-margin-bottom" onclick="window.open('https://www.youtube.com/watch?v=KPLWWIOCOOQ')">Watch Now</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <div class="w3-container w3-white">
            <p><img src="images/bb.jpeg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%"><br>Breaking Bad</br></p>
            <button class="w3-button w3-red w3-margin-bottom" onclick="window.open('https://www.youtube.com/watch?v=HhesaQXLuRY')">Watch Now</button>
          </div>
        </div>
      </div>
    </div>
  </div>
    </Body>       
</html>






