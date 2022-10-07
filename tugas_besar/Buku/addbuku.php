
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>ADD Buku</title>
  </head>
  <body>

      <h2>Tambah Data Buku</h2>
            <form action="daftarbuku.php?" method="POST" style="margin-left: 20px;">
            <fieldset>
                <div class="form-group">
                    <label >ISBN</label>
                    <input type="text" class="form-control" name="isbn1" placeholder="Masukan ISBN">
                </div>
                <div class="form-group">
                    <label>Judul Buku</label>
                    <input type="text" class="form-control" name="judulbuku1" placeholder="Masukan Judul Buku">
                </div>
                <div class="form-group">
                    <label>Tahun</label>
                    <input type="text" class="form-control" name="tahun1" placeholder="Masukan Tahun">
                </div>
                <div class="form-group">
                    <label>Nama Penerbit</label>
                    <select class="form-control" name="idpenerbit1">
                        <option value="" holder> - Pilih Identitas Penerbit - </option>
                        <?php
                            include '../koneksi.php';
                            $databuku = mysqli_query($koneksi, "SELECT * FROM penerbit ORDER BY id_penerbit DESC");
                            while($dp = mysqli_fetch_array($databuku)){ ?>
                                <option value="<?php echo $dp['id_penerbit']; ?>"><?php echo $dp['id_penerbit'] .' - '. $dp['nama_penerbit']; ?></option>
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
                            include '../koneksi.php';
                            $databuku = mysqli_query($koneksi, "SELECT * FROM pengarang ORDER BY id_pengarang DESC");
                            while($dp = mysqli_fetch_array($databuku)){ ?>
                                <option value="<?php echo $dp['id_pengarang']; ?>"><?php echo $dp['id_pengarang'] .' - '. $dp['nama_pengarang']; ?></option>
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
                            include '../koneksi.php';
                            $databuku = mysqli_query($koneksi, "SELECT * FROM katalog ORDER BY id_katalog DESC");
                            while($dp = mysqli_fetch_array($databuku)){ ?>
                                <option value="<?php echo $dp['id_katalog']; ?>"><?php echo $dp['id_katalog'] .' - '. $dp['nama']; ?></option>
                            <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Stok Buku</label>
                    <input type="number" class="form-control" name="stok1" placeholder="Masukan Jumlah Stok">
                </div>
                <div class="form-group">
                    <label>Harga Pinjam</label>
                    <input type="number" class="form-control" name="harga1" placeholder="Masukan Harga Pinjam">
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" class="form-control" name="img1" placeholder="Pilih Gambar">
                </div>
              <div class="d-grid gap-2">
              <button type="submit" class="btn btn-outline-success" style="margin-top: 30px;">Simpan</button>
              </div>
            </fieldset>
           
        </form>

	</form>
  </body>
</html>