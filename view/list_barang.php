<?php
include '../model/jenis_barang.php';

$data = select("SELECT * FROM tb_jenisbarang");
$data2 = select("SELECT * FROM tb_databarang");
?>

<?php include '../layout/header.php'; ?>

<h1>DATA JENIS BARANG</h1>
<br></br>

<a href="tambahjenisbarang.php" class="btn btn-dark">Tambah Jenis Barang </a>
<table class="table table-striped">
    <thead>
        <tr>
            <td>No</td>
            <td>Jenis Barang</td>
            <td>action</td>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($data as $row) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row["jenis_barang"]; ?></td>
                <td>
                    <a href="edit_jenisbarang.php?id=<?= $row["id"]; ?>">Edit Data</a>
                    <a href="hapusjenisbarang.php?id=<?= $row["id"]; ?>" onclick=" return confirm('Apakah anda yakin ingin menghapus data?')"> Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<br></br>

<a href="tambahdatabarang.php" class="btn btn-dark">Tambah Data Barang </a>
<br></br>
<h1>DATA BARANG</h1>

<table class="table table-striped">
    <thead>
        <tr>
            <td>No</td>
            <td>Kode Barang</td>
            <td>Nama Barang</td>
            <td>Jenis Barang</td>
            <td>Harga Beli</td>
            <td>Tanggal Beli</td>
            <td>action</td>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($data2 as $row) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row["kode_barang"]; ?></td>
                <td><?= $row["nama_barang"]; ?></td>
                <td><?= $row["jenis_barang"]; ?></td>
                <td><?= $row["harga_beli"]; ?></td>
                <td><?= date("l, d-M-Y", strtotime($row["tanggal_beli"])); ?></td>
                <td>
                    <a href="edit_databarang.php?id=<?= $row["id"]; ?>">Edit Data</a>
                    <a href="hapusdatabarang.php?id=<?= $row["id"]; ?>" onclick=" return confirm('Apakah anda yakin ingin menghapus data?')"> Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<br></br>
<?php include '../layout/footer.php' ?>