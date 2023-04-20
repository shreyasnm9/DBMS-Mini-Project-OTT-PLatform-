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
if(isset($_POST['admin']))
{
    $admin_user_name=$_POST['aname'];
    //echo $user_name;
    $admin_user_password=$_POST['apassword'];
    //echo $user_password;
    $s = " select * from admin where Admin_id = '$admin_user_name' and Admin_password = '$admin_user_password';";
        
    $result = mysqli_query($conn, $s);

    $num= mysqli_num_rows($result);

    if ($num >0 ){
        //echo "here";
        header("Location: http://localhost/ott/Adminhome.php");
        
    }
    else {
        echo "User ID/password doesn't match: <a href='Admin.php'>Login</a>";
        echo "<br>";
        echo "Home: <a href='homenew.php'>Home</a>";
        
        
    }
    mysqli_close($conn);
}
?>