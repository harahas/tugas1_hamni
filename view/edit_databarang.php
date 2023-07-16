<?php
include '../model/jenis_barang.php';
include '../layout/header.php';
include '../config/connection.php';
include '../controller/barangcontroller.php';

$id = $_GET["id"];

$data = select("SELECT * FROM tb_databarang WHERE id = $id")[0];
//coding update 
if (isset($_POST["simpan"])) {
    updatedatabarang($_POST);
}

?>
<h1 class="text-center"> Edit Data Barang</h1>
<form action="" method="POST">
    <input type="hidden" name="id" value="<?= $data["id"]; ?>">
    <div class="mb-3">
        <label for="kode_barang" class="form-label">Kode Barang</label>
        <input type="text" name="kode_barang" class="form-control" id="kode_barang" placeholder="Masukan Kode Barang" value="<?= $data["kode_barang"]; ?>">
    </div>
    <div class="mb-3">
        <label for="nama_barang" class="form-label">Nama Barang</label>
        <input type="text" name="nama_barang" class="form-control" id="nama_barang" placeholder="Masukan Nama Barang" value="<?= $data["nama_barang"]; ?>">
    </div>
    <div class="mb-3">
        <label for="jenis_barang" class="form-label">Jenis Barang</label>
        <input type="text" name="jenis_barang" class="form-control" id="jenis_barang" placeholder="Masukan Jenis Barang" value="<?= $data["jenis_barang"]; ?>">
    </div>
    <div class="mb-3">
        <label for="harga_beli" class="form-label">Harga Beli</label>
        <input type="text" name="harga_beli" class="form-control" id="harga_beli" placeholder="Masukan Harga Beli" value="<?= $data["harga_beli"]; ?>">
    </div>
    <div class="mb-3">
        <label for="tanggal_beli" class="form-label">Tanggal Beli</label>
        <input type="date" name="tanggal_beli" class="form-control" id="tanggal_beli" placeholder="Tanggal Beli" value="<?= $data["tanggal_beli"]; ?>">
    </div>

    <br></br>
    <button type="submit" class="btn btn-dark" name="simpan">Edit</button>
</form>
<?php include '../layout/footer.php' ?>