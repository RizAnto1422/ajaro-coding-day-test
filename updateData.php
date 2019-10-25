<?php

    include 'koneksi.php';

    $id=$_POST['id'];
    $kode=$_POST['kode'];
    $nama=$_POST['nama'];
    $deskripsi=$_POST['deskripsi'];
    $stok=$_POST['stok'];
    $harga=$_POST['harga'];
    $berat=$_POST['berat'];

    $queryResult= $connect->query("UPDATE data_barang SET kode='".$kode."', nama='".$nama."', deskripsi='".$deskripsi."', stok='".$stok."', harga='".$harga."', berat='".$berat."' WHERE id='".$id."'");

    if($queryResult){
        $result['pesan']="Data berhasil diubah";
    }else{
        $result['pesan']="Data gagal diubah";
    }

    echo json_encode($result);

?>
