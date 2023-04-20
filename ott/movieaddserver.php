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
if(isset($_POST['movieadd']))
{
    
        $movid=$_POST['Mov_id'];
        $movname=$_POST['Mname'];
        $genre=$_POST['genre'];
        $movlanguage=$_POST['mlanguage'];
        $movminutes=$_POST['mminutes'];
        $yor=$_POST['year_of_release'];
        
        $sql_query="INSERT INTO movie (Mov_id,Mname,genre,mlanguage,mminutes,year_of_release)
        values('$movid','$movname','$genre','$movlanguage','$movminutes','$yor')";
        
        if (mysqli_query($conn, $sql_query)){
            echo "New Movie added";
            echo "<br>";
            echo "Do you want to add another movie: ";
            echo "<a href = 'http://localhost/ott/Movieadd.php'>Add</a>";
            echo "<br>";
            echo "<a href = 'http://localhost/ott/AdminHome.php'>Home</a>";

        }
        else {
            echo "Error: "; 
        }
        mysqli_close($conn);
}
?>