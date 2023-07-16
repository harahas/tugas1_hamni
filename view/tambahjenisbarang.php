<?php
include '../layout/header.php';
include '../config/connection.php';
include '../controller/barangcontroller.php';
?>

<?php
if (isset($_POST["simpan"])) {
    create($_POST);
}

?>
<h1 class="text-center"> Tambah Jenis Barang</h1>
<form action="" method="POST">
    <div class="mb-3">
        <label for="jenis_barang" class="form-label">Jenis Barang</label>
        <input type="text" name="jenis_barang" class="form-control" id="jenis_barang" placeholder="Masukan Jenis Barang">
    </div>

    <br></br>
    <button type="submit" class="btn btn-dark" name="simpan">Simpan</button>
</form>
<?php include '../layout/footer.php' ?>