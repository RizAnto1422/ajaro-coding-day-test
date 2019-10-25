<?php

    include 'koneksi.php';

    $id=$_POST['id'];
    $result=array();

    $queryResult = $connect->query("SELECT * FROM data_barang WHERE id=".$id);

    $fecthData= $queryResult->fetch_assoc();
    $result= $fecthData;


    echo json_encode($result);
?>