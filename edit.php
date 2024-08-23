<?php
require_once "app/Mahasiswa.php";

$mhsw = new Mahasiswa();
$id = $_GET['id'];
$row = $mhsw->detail($id);
?>

<h2>Edit Data Mahasiswa</h2>
<form action="proses.php" method="POST">
    <input type="hidden" name="mhsw_id" value="<?php echo $row['mhsw_id']; ?>">
    <label>NIM:</label><br>
    <input type="text" name="mhsw_nim" value="<?php echo $row['mhsw_nim']; ?>" required><br><br>

    <label>Nama:</label><br>
    <input type="text" name="mhsw_nama" value="<?php echo $row['mhsw_nama']; ?>" required><br><br>

    <label>Alamat:</label><br>
    <input type="text" name="mhsw_alamat" value="<?php echo $row['mhsw_alamat']; ?>" required><br><br>

    <input type="submit" name="update" value="Update">
</form>
