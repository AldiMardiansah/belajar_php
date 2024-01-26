<style>
    table {
        width: 97%;
        border-collapse: collapse;
        margin: 20px auto;
        
    }

    thead {
        background-color: #3498db;
        color: #fff;
    }

    th, td {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: left;
    }

    tbody tr:nth-child(even) {
        background-color: #ecf0f1;
    }

    a {
        text-decoration: none;
        color: #3498db;
        border: 1px solid #3498db;
        padding: 8px 12px;
        border-radius: 5px;
        transition: background-color 0.3s, color 0.3s;
    }

    a:hover {
        background-color: #3498db;
        color: #fff;
    }

    #tambah {
        display: inline-block;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    #tambah a {
        background-color: #2ecc71;
        color: #fff;
    }

    #tambah a:hover {
        background-color: #27ae60;
    }

    a#edit {
        color: green;
        border: 1px solid green;
    }

    a#edit:hover {
        background-color: green;
        color: white;
    }

    a#delete {
        color: red;
        border: 1px solid red;
    }

    a#delete:hover {
        background-color: red;
        color: white;
    }

</style>
<table border="1">
    <thead>
        <tr>
            <th>#</th>
            <th>NIS</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Golongan Darah</th>
            <th>Nama Ibu Kandung</th>
            <th>Aksi</th>
        </tr>
        <a id="tambah" href="tambah.php">Tambah Data</a> <br><br>
        <a id="logout" href="logout.php">Logout</a>
    </thead>

    <tbody>
        <?php
            $i = 1;
            while ($siswa = $listSiswa->fetch_array()) {
        ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= $siswa['nis'] ?></td>
            <td><?= $siswa['nama_lengkap'] ?></td>
            <td><?= $siswa['jenis_kelamin'] ?></td>
            <td><?= $siswa['kelas'] ?></td>
            <td><?= $siswa['jurusan'] ?></td>
            <td><?= $siswa['alamat'] ?></td>
            <td><?= $siswa['golongan_darah'] ?></td>
            <td><?= $siswa['nama_ibu_kandung'] ?></td>
            <td>
                <a id="edit" href="edit.php?nis=<?= $siswa['nis'] ?>">Edit</a>
                <a id="delete" href="delete.php?nis=<?= $siswa['nis'] ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>