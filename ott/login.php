
<!DOCTYPE html>
<html lang="en">

<head>
<title>Login</title>
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

<body background = "images/background.jpeg"; background-size 100% 100% >
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="http://localhost/ott/homenew.php" class="w3-bar-item w3-button w3-padding-large"><img src="Homelogo.png" width="28" height="28" title="Home" alt="Home" /></a>
    
    
</div>
    <center>
    <div class="wrapper login">
        <div class="container">
            <div class="col-left">
            </div>
            <div class="col-right">
                <div class="login-form">
                    <h2 style="color: white;">Login</h2>
                    <form action="loginserver.php" method="post">
                        <p style="color:white;"><label>Username<span>&nbsp;</span></label><input type="text" name = "uname" placeholder="Username" required></p>
                        <p style="color:white;"><label>Password<span>&nbsp;</span></label><input type="password" name = "upassword" placeholder="Password" required></p>
                        <button style="color: black;" type="submit" class = "btn" name="Login">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</center>
</body>

</html>