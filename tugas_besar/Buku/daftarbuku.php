<?php
  
    include '../koneksi.php';

    $isbn1 = $_POST['isbn1'];
    $judul1 = $_POST['judulbuku1'];
    $tahun1 = $_POST['tahun1'];
    $idpenerbit1 = $_POST['idpenerbit1'];
    $idpengarang1 = $_POST['idpengarang1'];
    $idkatalog1 = $_POST['idkatalog1'];
    $stok1 = $_POST['stok1'];
    $harga1 = $_POST['harga1'];
    $img1 = $_POST['img1'];


    $query = mysqli_query($koneksi, "INSERT INTO buku VALUES('$isbn1','$judul1','$tahun1', '$idpenerbit1','$idpengarang1','$idkatalog1','$stok1','$harga1','$img1')");
    if($query){
        header("location:../admin.php?pesan=suksesbuku&"."&#buku");
    }else{
        echo "Gagal Menambahkan Data";
    }
?>