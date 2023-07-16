<?php
include '../model/jenis_barang.php';
include '../layout/header.php';
include '../config/connection.php';
include '../controller/barangcontroller.php';

$id = $_GET["id"];
//coding buat update 
if (isset($_POST["simpan"])) {
    updatejenisbarang($_POST);
}

$data = select("SELECT * FROM tb_jenisbarang WHERE id = $id")[0];

?>
<h1 class="text-center">Edit Jenis Barang</h1>
<form action="" method="POST">
    <input type="hidden" name="id" value="<?= $data["id"]; ?>">
    <div class="mb-3">
        <label for="jenis_barang" class="form-label">Jenis Barang</label>
        <input type="text" name="jenis_barang" class="form-control" id="jenis_barang" placeholder="Masukan Jenis Barang" value="<?= $data["jenis_barang"]; ?>">
    </div>

    <br></br>
    <button type="submit" class="btn btn-dark" name="simpan">Edit</button>
</form>
<?php include '../layout/footer.php' ?>