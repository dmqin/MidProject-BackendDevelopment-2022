<?php

include("../db_conn.php");
session_start();

if (isset($_POST['add'])) {

    $task_name = $_POST['task_name'];
    $date = $_POST['date'];
    $user_id = $_SESSION['id'];

    $sql = "INSERT INTO `task` (`task_id`, `user_id`, `task_name`, `date`, `status`) VALUES (NULL, '$user_id', '$task_name', '$date', '0')";
    $query = mysqli_query($conn, $sql);

    // apakah query simpan berhasil?
    if ($query) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: ../home.php');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: ../home.php');
    }

}
?>