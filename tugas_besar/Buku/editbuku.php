
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Edit Pasien</title>

    <style>
        .footer{
           margin-top: 100%;
        }
    </style>
  </head>
  <body>

    <?php

        include '../Koneksi.php';

        $id         = $_GET['isbn'];

        $query      = mysqli_query($koneksi, "SELECT * FROM buku WHERE isbn = '$id' ");
        $data       = mysqli_fetch_assoc($query);
            $judulOld      = $data['judul'];
            $tahunOld              = $data['tahun'];
            $idpenerbitOld    = $data['id_penerbit'];
            $idpengarangOld    = $data['id_pengarang'];
            $idkatalogOld    = $data['id_katalog'];
            $stokOld            = $data['qty_stok'];
            $hargaOld           = $data['harga_pinjam'];
            $imgOld =$data['img'];;
    ?>
  
    <div class="container mt-5 mb-5">
        <center><h4>Edit Pasien</h4></center>
        <hr>

        <form action="updatebuku.php?<?php echo "isbn=".$id ?>" method="POST" autocomplete="off">
            <fieldset>
            <div class="form-group" hidden>
                  <label>ISBN</label>
                  <input type="text"  class="form-control" name="isbn1" value="<?php echo $id; ?>"  placeholder="ISBN">
              </div>
              <div class="form-group">
                  <label>Judul Buku</label>
                  <input type="text" class="form-control" name="judulbuku1" value="<?php echo $judulOld; ?>" placeholder="Judul Buku">
              </div>
              <div class="form-group">
                  <label>Tahun</label>
                  <input type="text" class="form-control" name="tahun1" value="<?php echo $tahunOld; ?>" placeholder="Tahun">
              </div>
              <div class="form-group">
              <label>Nama Penerbit</label>
              <select class="form-control" name="idpenerbit1">
                  <option value="" holder> - Pilih Identitas Penerbit - </option>
                  <?php
                      include '../Koneksi.php';
                      $datapenerbit = mysqli_query($koneksi, "SELECT * FROM penerbit ORDER BY id_penerbit DESC");
                      while($dp = mysqli_fetch_array($datapenerbit)){ ?>
                          <option value="<?php echo $dp['id_penerbit']; ?>" <?php if($idpenerbitOld == $dp['id_penerbit']) echo 'selected'?> ><?php echo $dp['id_penerbit'] .' - '. $dp['nama_penerbit']; ?></option>
                      <?php
                      }
                  ?>
              </select>
          </div>
          <div class="form-group">
              <label>Nama Pengarang</label>
              <select class="form-control" name="idpengarang1">
                  <option value="" holder> - Pilih Identitas Pengarang - </option>
                  <?php
                      include '../Koneksi.php';
                      $datapengarang = mysqli_query($koneksi, "SELECT * FROM pengarang ORDER BY id_pengarang DESC");
                      while($dp = mysqli_fetch_array($datapengarang)){ ?>
                          <option value="<?php echo $dp['id_pengarang']; ?>" <?php if($idpengarangOld == $dp['id_pengarang']) echo 'selected'?> ><?php echo $dp['id_pengarang'] .' - '. $dp['nama_pengarang']; ?></option>
                      <?php
                      }
                  ?>
              </select>
          </div>
          <div class="form-group">
              <label>Nama Katalog</label>
              <select class="form-control" name="idkatalog1">
                  <option value="" holder> - Pilih Katalog - </option>
                  <?php
                      include '../Koneksi.php';
                      $datakatalog = mysqli_query($koneksi, "SELECT * FROM katalog ORDER BY id_katalog DESC");
                      while($dp = mysqli_fetch_array($datakatalog)){ ?>
                          <option value="<?php echo $dp['id_katalog']; ?>" <?php if($idkatalogOld == $dp['id_katalog']) echo 'selected'?> ><?php echo $dp['id_katalog'] .' - '. $dp['nama']; ?></option>
                      <?php
                      }
                  ?>
              </select>
          </div>
               <div class="form-group">
               <label>Stok Buku</label>
                <input type="number" class="form-control" name="stok1" placeholder="StokBuku" value="<?php echo $stokOld;?>" >
               </div>
               <div class="form-group">
                  <label>Harga Pinjam</label>
                  <input type="number" class="form-control" name="harga1" placeholder="Harga Pinjam" value="<?php echo $hargaOld; ?>">
                    </div>
                    <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" class="form-control" id="img1" name="img1">
                    <span><?php echo $data['img'];?></span>
   
                </div>
                <div class="form-group" hidden >
                  <input type="text" class="form-control" name="img2" value="<?php echo $imgOld; ?>" placeholder="Judul Buku">
              </div>
              <div class="d-grid gap-2">
              <button type="submit" class="btn btn-outline-success" style="margin-top: 30px;">Simpan</button>
              </div>
            
            </fieldset>
        </form>
    </div>

    <!-- start footer -->
    <footer class="mt-5 mb-5">
      <p style="text-align: center;font-size: 11px"> 
        Pemograman Web SMKN 24 Jakarta <br>  
        &copy; 2021 Hari Gunawan
      </p>
    </footer>
    <!-- end footer  -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>