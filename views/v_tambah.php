<style>
    form {
        width: 30%;
        margin: 20px auto;
        border: 2px solid #3498db;
        padding: 20px;
        border-radius: 10px;
        background-color: #ecf0f1;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    td {
        padding: 10px;
        text-align: left;
    }

    input[type="text"], input[type="submit"], select {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        margin-bottom: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    input[type="submit"] {
        background-color: #3498db;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s, color 0.3s;
        border: 1px solid #3498db;
    }

    input[type="submit"]:hover {
        background-color: #2980b9;
        color: #fff;
        border: 1px solid #2980b9;
    }
</style>

<?php
    $action = 'tambah.php';
    if (!empty($siswa)) $action = 'edit.php';
?>

<form action="<?= $action ?>" method="post">
    <table>
        <tr>
            <td>NIS</td>
            <td><input type="text" name="nis" value="<?= @$siswa['nis'] ?>" <?= ($action == 'edit.php') ? 'readonly' : ''; ?>></td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td><input type="text" name="nama_lengkap" value="<?= @$siswa['nama_lengkap'] ?>"><br></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
                <input type="radio" name="jenis_kelamin" value="L" <?= @$siswa['jenis_kelamin'] == 'L' ? 'checked' : '' ?>>Laki-Laki
                <input type="radio" name="jenis_kelamin" value="P" <?= @$siswa['jenis_kelamin'] == 'P' ? 'checked' : '' ?>>Perempuan 
            </td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>
                <select name="kelas">
                    <option value="XI-RPL 1" <?= @$siswa['kelas'] == 'XI-RPL 1' ? 'selected' : '' ?>>XI-RPL 1</option>
                    <option value="XI-RPL 2" <?= @$siswa['kelas'] == 'XI-RPL 2' ? 'selected' : '' ?>>XI-RPL 2</option>
                    <option value="XI-RPL 3" <?= @$siswa['kelas'] == 'XI-RPL 3' ? 'selected' : '' ?>>XI-RPL 3</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td><input type="text" name="jurusan" value="<?= @$siswa['jurusan'] ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" value="<?= @$siswa['alamat'] ?>"></td>
        </tr>
        <tr>
            <td>Golongan Darah</td>
            <td>
                <select name="golongan_darah">
                    <option value="A" <?= @$siswa['golongan_darah'] == 'A' ? 'selected' : '' ?>>A</option>
                    <option value="B" <?= @$siswa['golongan_darah'] == 'B' ? 'selected' : '' ?>>B</option>
                    <option value="O" <?= @$siswa['golongan_darah'] == 'O' ? 'selected' : '' ?>>O</option>
                    <option value="AB" <?= @$siswa['golongan_darah'] == 'AB' ? 'selected' : '' ?>>AB</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Nama Ibu Kandung</td>
            <td><input type="text" name="nama_ibu_kandung" value="<?= @$siswa['nama_ibu_kandung'] ?>"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Simpan"></td>
        </tr>
    </table>
</form>