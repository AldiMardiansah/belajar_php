<?php

    include 'lib/library.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nis            = $_POST['nis'];
        $nama_lengkap   = $_POST['nama_lengkap'] ;
        $jenis_kelamin  = $_POST['jenis_kelamin'];
        $kelas          = $_POST['kelas'];
        $jurusan        = $_POST['jurusan'];
        $alamat         = $_POST['alamat'];
        $golongan_darah = $_POST['golongan_darah'];
        $nama_ibu_kandung = $_POST['nama_ibu_kandung'];
        

        $sql = "INSERT INTO siswa (nis, nama_lengkap, jenis_kelamin, kelas, jurusan, alamat, golongan_darah, nama_ibu_kandung) VALUES
                ('$nis', '$nama_lengkap', '$jenis_kelamin', '$kelas', '$jurusan', '$alamat', '$golongan_darah', '$nama_ibu_kandung')";
        
        $mysqli->query($sql) or die ($mysqli->error);

        header('location: index.php');
    }

    include 'views/v_tambah.php';
?>