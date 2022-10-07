<?php
 


 include '../koneksi.php';
     
    $judul1    = $_POST['judulbuku1'];
    $tahun1            = $_POST['tahun1'];
    $idpenerbit1=$_POST['idpenerbit1'];
    $idpengarang1=$_POST['idpengarang1'];
    $idkatalog1=$_POST['idkatalog1'];
    $stok1         = $_POST['stok1'];
    $harga1        = $_POST['harga1'];
    $img1          =$_POST['img1'];
    $db = $_POST['img2'];
    $isbn   = $_GET['isbn'];

   
    if($img1 == ""){

        $update    = "UPDATE buku SET judul='$judul1',  tahun='$tahun1', id_penerbit='$idpenerbit1', id_pengarang='$idpengarang1',
        id_katalog='$idkatalog1', qty_stok='$stok1', harga_pinjam='$harga1', img='$db' WHERE isbn='$isbn' ";
  
    }else{
        $update     = "UPDATE buku SET judul='$judul1',  tahun='$tahun1', id_penerbit='$idpenerbit1', id_pengarang='$idpengarang1',
        id_katalog='$idkatalog1', qty_stok='$stok1', harga_pinjam='$harga1',img='$img1' WHERE isbn='$isbn' ";
    }
    $query      = mysqli_query($koneksi,$update);
    if($query){
        header("location:../admin.php?pesan=editbuku&"."&#buku");
    }else{
        echo "Data Gagal Diupdate";
    }
 

?>