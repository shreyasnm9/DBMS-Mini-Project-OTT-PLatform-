<?php
$servername="localhost";
$username="root";
$password="";
$database_name="ott";

$conn=mysqli_connect($servername,$username,$password,$database_name);
//echo "test";
if(!$conn)
{
    die("Connection Failed:" . mysqli_error());
}
 

if(isset($_POST['tvupdate']))
{
        //echo "Inside";
        $tvid = $_POST['tvid'];
        $tvname=$_POST['tvname'];
        $seasons=$_POST['seasons'];
        $noe=$_POST['noe'];
        $yor=$_POST['yor'];
        $tvgenre=$_POST['tvgenre'];
        $tvlang = $_POST['tvlanguage'];
        $tp = $_POST['tposter'];
    $s = " UPDATE tv SET TV_name=' $tvname',seasons='$seasons',no_of_episodes='$noe',yr_of_release='$yor',`genreTV`='$tvgenre',languageTV='$tvlang',tposter='$tp' WHERE TV_id = '$tvid';";
    echo "$s"; 
    
    $result = mysqli_query($conn, $s);   
    if ($result >0 ){
        header("Location: http://localhost/ott/tvup.php");
        
    }
    else {
        echo "Record not updated. Please try again";
        
        
    }
    mysqli_close($conn);

}
?>