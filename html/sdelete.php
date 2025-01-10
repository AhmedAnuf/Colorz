<?php

$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "colorz");

$delete = $_GET['del'];

$sql ="delete from sales where Sales_Agent_ID ='$delete'";

if(mysqli_query($connection, $sql))
    {
        echo '<script>location.replace("Sales_table.php");</script>';
    }
    else
    {
        echo "Something went wrong: " . mysqli_error($connection);
    }


?>