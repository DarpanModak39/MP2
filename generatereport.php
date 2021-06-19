<?php
    include_once './dbcon.php';
    header('Content-Type: text/plain');
    header('Content-Disposition: attachment; filename="Report.txt"');
    $sql="SELECT * FROM insurance";
    $result=mysqli_query($con,$sql);
    echo"Insurance \n";
    echo"ID UserID Status \n";
    while($row=mysqli_fetch_row($result))
    {
        echo"$row[0]   $row[1]     $row[8] \n";
    }
    echo"\n\n";

    $sql="SELECT * FROM claim";
    $result=mysqli_query($con,$sql);
    echo"Claim \n";
    echo"ID UserID Status \n";
    while($row=mysqli_fetch_row($result))
    {
        echo"$row[0]   $row[1]     $row[5] \n";
    }
    echo"\n\n";
    
    $sql="SELECT * FROM  refund";
    $result=mysqli_query($con,$sql);
    echo"Refund \n";
    echo"ID UserID Status \n";
    while($row=mysqli_fetch_row($result))
    {
        echo"$row[0]   $row[1]     $row[5] \n";
    }
    
?>