<?php
    session_start();
    include_once './dbcon.php';

if(isset($_POST["viewimage"]))
{
    $image=mysqli_real_escape_string($con,$_POST["image"]);
}
?>
<link rel="stylesheet" href="css/signuplogin.css" type="text/css">
<img src="<?php print($image)?>" alt="Image not found" style="width:100%; height:100%;">


