<form action="" method="get">
    <label for="">Nama</label>
    <input type="text" name="nama"><br>

    <label for="">Alamat</label>
    <input type="text" name="alamat"><br>

    <input type="submit" name="proses" id="" value="simpan"><br>
</form>

<?php
$nama = $_GET['nama'];
$alamat = $_GET['alamat'];
$proses = $_GET['proses'];

if (isset($proses)) {
    echo "Nama : $nama <br> Alamat : $alamat";
}
?>