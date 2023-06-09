<!DOCTYPE html>
<html lang="en">
<head>
<title>OTT</title>
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

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="http://localhost/ott/homenew.php#" class="w3-bar-item w3-button w3-padding-large"><img src="Homelogo.png" width="28" height="28" title="Home" alt="Home" /></a>
    <a href="http://localhost/ott/login.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Login</a>
    <a href="http://localhost/ott/admin.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Admin</a>
  </div>
</div>

  
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">Coming Soon</h2><!--
    <p class="w3-opacity"><i>We love music</i></p>
    <p class="w3-justify">We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
      ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur
      adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p>Avatar<br>The way of the water</br></p>
        <img src="images/av8.png" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
        <button class="w3-button w3-black w3-margin-bottom" onclick="window.open('https://www.youtube.com/watch?v=d9MyW72ELq0&t=1s')">Watch Trailer</button>
      </div>
      <div class="w3-third">
        <p>John Wick<br>Chapter 4</br></p>
        <img src="images/jw.jpeg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
        <button class="w3-button w3-black w3-margin-bottom" onclick="window.open('https://www.youtube.com/watch?v=qEVUtrk8_B4')">Watch Trailer</button>
      </div>
      <div class="w3-third">
        <p>Oppenheimer<br></br></p>
        <img src="images/op.jpeg" class="w3-round" alt="Random Name" style="width:52%"><br></br>
        <button class="w3-button w3-black w3-margin-bottom" onclick="window.open('https://www.youtube.com/watch?v=bK6ldnjE3Y0')">Watch Trailer</button>
      </div>
    </div>
  </div>

  <!-- The Tour Section -->
  <div class="w3-black" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">OUR PLANS</h2>
      <p class="w3-opacity w3-center"><i>We have the best deals!</i></p><br>
        <!--
      <ul class="w3-ul w3-border w3-white w3-text-grey">
        <li class="w3-padding">September <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
        <li class="w3-padding">October <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
        <li class="w3-padding">November <span class="w3-badge w3-right w3-margin-right">3</span></li>
      </ul>-->

      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <div class="w3-container w3-white">
            <p><b>Daily</b></p>
            <p class="w3-opacity">₹80</p>
            <p>Watch your favourite movies and tv shows for the next 24 hours in 720p in one device add free!</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="window.location.href='http://localhost/ott/signupdaily.php';">Buy Subscription</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <div class="w3-container w3-white">
            <p><b>Monthly</b></p>
            <p class="w3-opacity">₹150</p>
            <p>Your favourite movies and tv shows will be available for the next 30 days in 1080p in two devices ad free!</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="window.location.href='http://localhost/ott/signupmonthly.php';">Buy Subscription</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <div class="w3-container w3-white">
            <p><b>Yearly</b></p>
            <p class="w3-opacity">₹750</p>
            <p>Your favourite movies and tv shows available for an entire year in 4K in four devices ad free!</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="window.location.href='http://localhost/ott/signupyearly.php';">Buy Subscription</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Ticket Modal -->
  <div id="ticketModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal').style.display='none'" 
       class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
        <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i></h2>
      </header>
      <div class="w3-container">
        <p><label><i class="fa fa-shopping-cart"></i> Tickets, $15 per person</label></p>
        <input class="w3-input w3-border" type="text" placeholder="How many?">
        <p><label><i class="fa fa-user"></i> Send To</label></p>
        <input class="w3-input w3-border" type="text" placeholder="Enter email">
        <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">PAY <i class="fa fa-check"></i></button>
        <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
        <p class="w3-right">Need <a href="#" class="w3-text-blue">help?</a></p>
      </div>
    </div>
  </div>

  <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT US</h2>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Bangalore, India<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +91 9900562314<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: ott@mail.com<br>
      </div>
    </div>
  </div>
  
<!-- End Page Content -->
</div>
<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
</footer>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
