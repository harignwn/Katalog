<?php   

    include '../koneksi.php';

    $idbuku      = $_GET['isbn'];
 

    $delete     = "DELETE FROM buku WHERE isbn = '$idbuku'";
    $query      = mysqli_query($koneksi,$delete);

    if($query){
        header("location:../admin.php?pesan=deletebuku&"."&#buku");
    }else{
        echo "Data Gagal Dihapus";
    }

?>