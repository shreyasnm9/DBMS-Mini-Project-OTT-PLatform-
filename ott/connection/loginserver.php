<?php
$servername="localhost";
$username="root";
$password="";
$database_name="ott";

$conn=mysqli_connect($servername,$username,$password,$database_name);

if(!$conn)
{
    die("Connection Failed:" . mysqli_error());
}
if(isset($_POST['Login']))
{
    $user_name=$_POST['uname'];
    //echo $user_name;
    $user_password=$_POST['upassword'];
    //echo $user_password;
    $s = " select * from customer where username = '$user_name' and upassword = '$user_password';";
        
    $result = mysqli_query($conn, $s);

    $num= mysqli_num_rows($result);

    if ($num >0 ){
        header("Location: http://localhost/ott/home.php");
        
    }
    else {
        echo "User ID/password doesn't match: <a href='login.php'>Login</a>";
        echo "<br>";
        echo "If you are a new user: <a href = 'signup.php'>SignUp</a>";
        
    }
    mysqli_close($conn);
}
?>