<?php

include("../db_conn.php");


if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $value = $_GET['value'];
    $finalValue = $value == 0 ? 1 : 0;

    $sql = "UPDATE `task` SET `status` = '$finalValue' WHERE `task`.`task_id` = $id;";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header('Location: ../home.php');
    } else {
        die("Delete failed..");
    }

} else {
    die("No access..");
}

?>