<?php
include '../model/jenis_barang.php';
include '../config/connection.php';
include '../controller/barangcontroller.php';

$id = $_GET["id"]; //dideklarasikan sebagai $id
hapusdatabarang($id);
