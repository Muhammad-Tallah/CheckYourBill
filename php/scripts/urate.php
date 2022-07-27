<?php

include("../../dp.php");

if (isset($_POST['edit_rates'])) {

    $id = $_POST['id'];
    $unit = $_POST['unit'];
    $rate = $_POST['rate'];
    $date = date('Y-m-d');
   

    

    $update = $con->query("UPDATE `rates` SET `unit`='$unit',`rate`='$rate',`date`='$date' WHERE id='$id'");

    if ($update) {
        header("location:../../?rates=true");
    } else {
        echo "Error";
    }
}