<?php
include '../layout/header.php';
include '../config/connection.php';
include '../controller/barangcontroller.php';
?>

<?php
if (isset($_POST["simpan"])) {
    create_data($_POST);
}

?>
<h1 class="text-center"> Tambah Data Barang</h1>
<form action="" method="POST">
    <div class="mb-3">
        <label for="kode_barang" class="form-label">Kode Barang</label>
        <input type="text" name="kode_barang" class="form-control" id="kode_barang" placeholder="Masukan Kode Barang">
    </div>
    <div class="mb-3">
        <label for="nama_barang" class="form-label">Nama Barang</label>
        <input type="text" name="nama_barang" class="form-control" id="nama_barang" placeholder="Masukan Nama Barang">
    </div>
    <div class="mb-3">
        <label for="jenis_barang" class="form-label">Jenis Barang</label>
        <input type="text" name="jenis_barang" class="form-control" id="jenis_barang" placeholder="Masukan Jenis Barang">
    </div>
    <div class="mb-3">
        <label for="harga_beli" class="form-label">Harga Beli</label>
        <input type="text" name="harga_beli" class="form-control" id="harga_beli" placeholder="Masukan Harga Beli">
    </div>
    <div class="mb-3">
        <label for="tanggal_beli" class="form-label">Tanggal Beli</label>
        <input type="date" name="tanggal_beli" class="form-control" id="tanggal_beli" placeholder="Tanggal Beli">
    </div>

    <br></br>
    <button type="submit" class="btn btn-dark" name="simpan">Simpan</button>
</form>
<?php include '../layout/footer.php' ?>