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
if(isset($_POST['tvadd']))
{
    //echo "Inside";
        $tvid=$_POST['TV_id']; 
        //echo $User_name;
        $tvname=$_POST['TV_name'];
        //echo $Full_name;
        $seasons=$_POST['seasons'];
        $noe=$_POST['no_of_episodes'];
        $tvyor=$_POST['yr_of_release'];
        $tvgenre=$_POST['genreTV'];
        $tvlanguage=$_POST['languageTV'];
        $sql_query="INSERT INTO tv (TV_id,TV_name,seasons,no_of_episodes,yr_of_release,genreTV,languageTV)
        values('$tvid','$tvname','$seasons','$noe','$tvyor','$tvgenre','$tvlanguage')";
        
        if (mysqli_query($conn, $sql_query)){
            echo "New Movie added";
            echo "<br>";
            echo "Do you want to add another TV show: ";
            echo "<a href = 'http://localhost/ott/addtv.php'>Add</a>";
            echo "<br>";
            echo "<a href = 'http://localhost/ott/AdminHome.php'>Home</a>";

        }
        else {
            echo "Error: "; 
        }
        mysqli_close($conn);
}
?>