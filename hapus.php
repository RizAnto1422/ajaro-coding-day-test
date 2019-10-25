<?php

    include 'koneksi.php';

    $id=$_POST['id'];
    $connect->query("DELETE FROM data_barang WHERE id=".$id);

?>