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
 

if(isset($_POST['movieupdate']))
{
    
        $movid = $_POST['Mid'];
        $movname=$_POST['Mname'];
        $genre=$_POST['genre'];
        $movlanguage=$_POST['mlanguage'];
        $movminutes=$_POST['mminutes'];
        $yor=$_POST['year_of_release'];
        $mp = $_POST['poster'];
    $s = " update movie set Mname = '$movname', genre = '$genre', mlanguage = '$movlanguage', mminutes = '$movminutes', year_of_release = '$yor', mposter = '$mp' where Mov_id = '$movid';"; 
    $result = mysqli_query($conn, $s);
    if ($result >0 ){
        header("Location: http://localhost/ott/upmovie.php");
        
    }
    else {
        echo "Record not updated. Please try again";
        
        
    }
    mysqli_close($conn);

}
?>