<?php

$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "colorz");

$delete = $_GET['del'];

$sql ="delete from quote where Quote_ID ='$delete'";

if(mysqli_query($connection, $sql))
    {
        echo '<script>location.replace("Quotations_table.php");</script>';
    }
    else
    {
        echo "Something went wrong: " . mysqli_error($connection);
    }


?>