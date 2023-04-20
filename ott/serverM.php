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
if(isset($_POST['SignUpM']))
{
    //echo "Inside";
        $User_name=$_POST['Username']; 
        //echo $User_name;
        $Full_name=$_POST['Fullname'];
        //echo $Full_name;
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $userpassword=$_POST['userpassword'];
        $age=$_POST['age'];
        $country=$_POST['country'];

        $sql_query="INSERT INTO customer (Username,fullname,email,phone,upassword,age,country,sub_id)
        values('$User_name','$Full_name','$email','$phone','$userpassword','$age','$country','M001')";
        $sql_query_check = "SELECT * from customer where Username = '$User_name'";
        $result1 = mysqli_query($conn, $sql_query_check);
        $num= mysqli_num_rows($result1);
        if($num >0){
            echo "Username Already exists <br>";
            echo "If you are a new user: <a href = 'signupmonthly.php'>Try Again</a>";
            exit;
        }
        
        else {
            mysqli_query($conn, $sql_query);
            header("Location: http://localhost/ott/home.php?uid=".$User_name."");
            //echo "New Customer added";
        }
        mysqli_close($conn);
}
?>