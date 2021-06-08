<?php
    session_start();
    include_once './dbcon.php';
    if($_SESSION["type"]!=="admin")
    {
        header("location:./admin.php");
    }

if(isset($_POST["viewvideo"]))
{
    $video=mysqli_real_escape_string($con,$_POST["video"]);
}
?>
<link rel="stylesheet" href="css/signuplogin.css" type="text/css">
<video src="<?php print($video)?>" controls width='100%' height='100%'></video>


