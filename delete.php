<?php
    //Delete
    include 'lib/library.php';

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $nis = $_GET['nis'];

        $sql = "DELETE FROM siswa WHERE nis = '$nis'";
        $mysqli->query($sql) or die ($mysqli->error);

        header('location: index.php');
    }
?>