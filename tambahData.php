<?php
    include 'koneksi.php';

    $kode=$_POST['kode'];
    $nama=$_POST['nama'];
    $deskripsi=$_POST['deskripsi'];
    $stok=$_POST['stok'];
    $harga=$_POST['harga'];
    $berat=$_POST['berat'];

    $queryResult= $connect->query("INSERT INTO data_barang (kode,nama,deskripsi,stok,harga,berat) VALUES ('".$kode."','".$nama."','".$deskripsi."','".$stok."','".$harga."','".$berat."')");

    if($queryResult){
        $result['pesan']="Data berhasil ditambahkan";
    }else{
        $result['pesan']="Data gagal ditambahkan";
    }

    echo json_encode($result);

?>