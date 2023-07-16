<?php
include '../config/connection.php';
function create($request)
{
    global $conn;
    $jenis_barang = $request["jenis_barang"];

    mysqli_query($conn, "INSERT INTO tb_jenisbarang VALUES('','$jenis_barang')");

    $cek = mysqli_affected_rows($conn);

    if ($cek) {
        echo '<script>
        alert("Data Berhasil Ditambahkan")
        document.location.href = "list_barang.php"
        </script>';
    } else {
        echo '<script>
        alert("Data Gagal Ditambahkan")
        document.location.href = "list_barang.php"
        </script>';
    }
}
function create_data($request)
{
    global $conn;
    $kode_barang = $request["kode_barang"];
    $nama_barang = $request["nama_barang"];
    $jenis_barang = $request["jenis_barang"];
    $harga_beli = $request["harga_beli"];
    $tanggal_beli = $request["tanggal_beli"];


    mysqli_query($conn, "INSERT INTO tb_databarang VALUES('','$kode_barang','$nama_barang','$jenis_barang','$harga_beli','$tanggal_beli')");

    $cek = mysqli_affected_rows($conn);

    if ($cek) {
        echo '<script>
        alert("Data Berhasil Ditambahkan")
        document.location.href = "list_barang.php"
        </script>';
    } else {
        echo '<script>
        alert("Data Gagal Ditambahkan")
        document.location.href = "list_barang.php"
        </script>';
    }
}

function updatedatabarang($request)
{
    global $conn;
    $id = $request["id"];
    $kode_barang = $request["kode_barang"];
    $nama_barang = $request["nama_barang"];
    $jenis_barang = $request["jenis_barang"];
    $harga_beli = $request["harga_beli"];
    $tanggal_beli = $request["tanggal_beli"];

    mysqli_query($conn, "UPDATE tb_databarang SET kode_barang = '$kode_barang', nama_barang = '$nama_barang', jenis_barang= '$jenis_barang', harga_beli= '$harga_beli', tanggal_beli= '$tanggal_beli' WHERE id = $id");

    $cek = mysqli_affected_rows($conn);

    if ($cek) {
        echo '<script>
        alert("Data Berhasil DiUpdate")
        document.location.href = "list_barang.php"
        </script>';
    } else {
        echo '<script>
        alert("Data Berhasil DiUpdate")
        document.location.href = "list_barang.php"
        </script>';
    }
}

function updatejenisbarang($request)
{
    global $conn;
    $id = $request["id"];
    $jenis_barang = $request["jenis_barang"];


    mysqli_query($conn, "UPDATE tb_jenisbarang SET jenis_barang = '$jenis_barang' WHERE id = $id");

    $cek = mysqli_affected_rows($conn);

    if ($cek) {
        echo '<script>
        alert("Data Berhasil DiUpdate")
        document.location.href = "list_barang.php"
        </script>';
    } else {
        echo '<script>
        alert("Data Berhasil DiUpdate")
        document.location.href = "list_barang.php"
        </script>';
    }
}
function hapusjenisbarang($id)
{

    global $conn;
    mysqli_query($conn, "DELETE from tb_jenisbarang WHERE id = $id");

    echo '<script>
    alert("Data Berhasil Dihapus")
    document.location.href = "list_barang.php"
    </script>';
}
function hapusdatabarang($id)
{

    global $conn;
    mysqli_query($conn, "DELETE from tb_databarang WHERE id = $id");

    echo '<script>
    alert("Data Berhasil Dihapus")
    document.location.href = "list_barang.php"
    </script>';
}
