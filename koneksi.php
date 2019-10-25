<?php
    $connect=new mysqli("localhost","root","","rest_data");
    if(!$connect){
        echo "koneksi gagal";
        exit();
    }
?>