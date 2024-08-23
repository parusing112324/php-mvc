<?php
require_once "app/Mahasiswa.php";

$mhsw = new Mahasiswa();

// Proses Tambah Data
if (isset($_POST['submit'])) {
    $nim = $_POST['mhsw_nim'];
    $nama = $_POST['mhsw_nama'];
    $alamat = $_POST['mhsw_alamat'];

    $mhsw->tambah($nim, $nama, $alamat);
    header("Location: index.php");
}

// Proses Hapus Data
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $mhsw->hapus($id);
    header("Location: index.php");
}

// Proses Edit Data
if (isset($_POST['update'])) {
    $id = $_POST['mhsw_id'];
    $nim = $_POST['mhsw_nim'];
    $nama = $_POST['mhsw_nama'];
    $alamat = $_POST['mhsw_alamat'];

    $mhsw->update($id, $nim, $nama, $alamat);
    header("Location: index.php");
}
?>
