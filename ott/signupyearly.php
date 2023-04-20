<!DOCTYPE html>
<html lang="en">

<head>
<title>SignUp</title>
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
    
    <a href="http://localhost/ott/login.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Login</a>
</div>
    <center>
    <div class="wrapper login">
        <div class="container">
            <div class="col-left">
            </div>
            <div class="col-right">
                <div class="login-form">
                    <h2 style="color:white;">Sign up</h2>
                    <form action="serverY.php" method="post">
                        <p style="color:white;"> <label style="text-align: left;">Username</label>&nbsp;<input type="text" name="Username" placeholder="Enter your Username" required></p>
                        <p style="color:white;"> <label style="text-align: left;">Full name<span></span></label> <input type="text" name="Fullname"placeholder="Enter your First Name" required> </p>
                        <p style="color:white;"> <label>email<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></label> <input type="email"name="email" placeholder="Enter your Email" required> </p>
                        <p style="color:white;"> <label style="text-align: left;">phone<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></label><input type="number" name="phone" min="1000000000" max="9999999999" pattern="[0-9]{11}" placeholder="Enter your Phone number" required> </p>
                        <p style="color:white;"> <label>age<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></label> <input type="number" name="age" maxlength="2" placeholder="Enter your Age" required> </p>
                        <p style="color:white;"> <label>country<span>&nbsp;&nbsp;&nbsp;</span></label> <input type="text" name="country" placeholder="Enter your Country" required> </p>
                        <p style="color:white;"> <label>password<span></span></label> <input type="password" name="userpassword" placeholder="Enter your Password" required> </p>
                        <button style="color: black;" type="submit" class = "btn" name="SignUpY">signup</button>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</center>
</body>

</html>