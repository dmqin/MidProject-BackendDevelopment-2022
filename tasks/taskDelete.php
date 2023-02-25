<?php

include("../db_conn.php");

if( isset($_GET['id']) ){

    $id = $_GET['id'];

    $sql = "DELETE FROM task WHERE task_id=$id";
    $query = mysqli_query($conn, $sql);

    if( $query ){
        header('Location: ../home.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>