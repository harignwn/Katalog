<!DOCTYPE html>
<html>
<head>
<title>Wentigze Library</title>
<meta charset="UTF-8">
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("background.webp");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide">WENTIGZE</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#home" class="w3-bar-item w3-button">HOME</a>
      <a href="#katalog" class="w3-bar-item w3-button"><i class="fa fa-address-card"></i> CATALOG</a>
      <a href="#buku" class="w3-bar-item w3-button"><i class="fa fa-th"></i> BOOK</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#home" onclick="w3_close()" class="w3-bar-item w3-button">HOME</a>
  <a href="#katalog" onclick="w3_close()" class="w3-bar-item w3-button">KATALOG</a>
  <a href="#buku" onclick="w3_close()" class="w3-bar-item w3-button">BUKU</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small" ><b>Welcome to wentigze international library </b> </span><br>
    <span class="w3-large">Look for insight as wide as the universe even if you are only in the world.</span>
  </div> 
 
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="katalog">
  <h3 class="w3-center">LIBRARY BOOK CATALOG</h3>
  <p class="w3-center w3-large">insight is the key to success</p>
  <?php
                    include 'koneksi.php';
                    // $batasbuku = 5;
                    // $halamanbuku = isset($_GET['halamanbuku'])?(int)$_GET['halamanbuku'] :1;
                    // $halaman_awal_buku =($halamanbuku>1)?($halamanbuku*$batasbuku)-$batasbuku:0;
                    // $previousbuku = $halamanbuku-1;
                    // $nextbuku = $halamanbuku + 1;

                    $databuku = mysqli_query($koneksi, "select*from buku ");
                    $jumlah_data_buku = mysqli_num_rows($databuku);
                    // $total_halaman_buku = ceil($jumlah_data_buku/$batasbuku);

                    $data_buku = mysqli_query($koneksi, "select * from buku ORDER BY isbn ASC");
                    // $nomorbuku = $halaman_awal_buku+1;
                   
                      ?>
                      <div class="container">
  <div class="row">
  <?php  while($d = mysqli_fetch_array($data_buku)){?>
    <div class="col-3">

    <div class="card" style="border-radius:20px;margin:10px;box-shadow:4px 4px 3px lightgreen;" >
    <img  src="<?php echo $d['img'] ?>" alt="" width="90%">
      <div class="card-body">
        <h5 class="card-title"><b><?php echo $d['judul'] ?></b> </h5>
        <p class="card-text" style="color: black;">ISBN :<?php echo $d['isbn'] ?><br>

    Tahun :<?php echo $d['tahun'] ?><br>
    Penerbit :<?php echo $d['id_penerbit'] ?><br>
    Pengarang : <?php echo $d['id_pengarang'] ?><br>
    Katalog :  <?php echo $d['id_katalog'] ?><br>
    Stok Buku :<?php echo $d['qty_stok'] ?><br>
    Harga Pinjam :<?php echo $d['harga_pinjam'] ?><br>
    </p>
     <div class="card-footer">
     <a href="<?php echo "Buku/editbuku.php?isbn=".$d['isbn']?>"class="w3-button w3-orange">Edit </a></td>
     <a href="<?php echo "Buku/deletebuku.php?isbn=".$d['isbn'] ?>"class="w3-button w3-red"> Delete</a>
     </div>
    
      </div>
    </div>
  
    </div>
    <?php            
                    }?>
  </div>
</div>
</div>
</div>

<!-- Promo Section - "We know design" -->
<div class="w3-container w3-light-grey" style="padding:30px 16px">
<div id="buku" class="container-fluid" style="padding-Top:100px; padding-Bottom:100px;">
        <?php
            if(isset($_GET['pesan'])){
              if($_GET['pesan'] == "suksesbuku"){
                echo "<div class='alert alert-primary alert-dismissible fade show' role='alert'>
                        <center> Data Berhasil Ditambahkan  </center>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                          <span aria-hidden='true'>&times;</span>
                        </button>
                      </div>";
              }else if($_GET['pesan'] == "deletebuku"){
                echo "<div class='alert alert-primary alert-dismissible fade show' role='alert'>
                        <center> Data Berhasil Dihapus </center>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                          <span aria-hidden='true'>&times;</span>
                        </button>
                      </div>";          
              }else if($_GET['pesan'] == "editbuku"){
                echo "<div class='alert alert-primary alert-dismissible fade show' role='alert'>
                        <center> Data Berhasil Diupdate </center>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                          <span aria-hidden='true'>&times;</span>
                        </button>
                      </div>";
              }     
              
            }
    ?>

    <center>
         <h2>Data Buku Tabel</h2>
    </center>
                <br>
                <div>
                 <Button class="btn btn-primary"> <a style="color: white;" href="<?php echo "Buku/addbuku.php?" ?>">+Tambah Data</a></Button>
                </div><br>
         <div class="table-responsive">
           <table class="w3-table-all w3-card-4">
            <thead>
              <tr style="text-align: center;" class="w3-teal">
              <th>NO</th>
              <th>ISBN</th>
              <th>Judul Buku</th>
              <th>Tahun</th>
              <th>ID Penerbit</th>
              <th>ID Pengarang</th>
              <th>ID Katalog</th>
              <th>Jumlah Stok</th>
              <th>Harga Pinjam</th>
              <th>Gambar</th>
              <th colspan="2" style="text-align: center;">Action</th>
                   </tr>
                  </thead>
                  <tbody>
                    <?php
                    include 'koneksi.php';
                    $batasbuku = 5;
                    $halamanbuku = isset($_GET['halamanbuku'])?(int)$_GET['halamanbuku'] :1;
                    $halaman_awal_buku =($halamanbuku>1)?($halamanbuku*$batasbuku)-$batasbuku:0;
                    $previousbuku = $halamanbuku-1;
                    $nextbuku = $halamanbuku + 1;

                    $databuku = mysqli_query($koneksi, "select*from buku ");
                    $jumlah_data_buku = mysqli_num_rows($databuku);
                    $total_halaman_buku = ceil($jumlah_data_buku/$batasbuku);

                    $data_buku = mysqli_query($koneksi, "select * from buku ORDER BY isbn ASC limit $halaman_awal_buku, $batasbuku");
                    $nomorbuku = $halaman_awal_buku+1;
                    while($d = mysqli_fetch_array($data_buku)){
                      ?>
                       <td style="text-align: center;"> <?php echo $nomorbuku++ ?> </td>
                       
                  <td> <?php echo $d['isbn'] ?> </td>
                  <td> <?php echo $d['judul'] ?> </td>
                  <td> <?php echo $d['tahun'] ?> </td>
                  <td> <?php echo $d['id_penerbit'] ?> </td>
                  <td> <?php echo $d['id_pengarang'] ?> </td>
                  <td> <?php echo $d['id_katalog'] ?> </td>
                  <td> <?php echo $d['qty_stok'] ?> </td>
                  <td><?php echo $d['harga_pinjam'] ?></td>
                  <td style="width: 150px;" ><img width="50%" src="<?php echo $d['img'] ?>" alt=""></td>
                  <td style="text-align:center;">
                          <a href="<?php echo "Buku/editbuku.php?isbn=".$d['isbn']?>"class="w3-button w3-orange">Edit </a></td>
                  <td>
                    <a href="<?php echo "Buku/deletebuku.php?isbn=".$d['isbn'] ?>"class="w3-button w3-red"> Delete</a>
                  </td>
                        </tr>
                        <?php
                    }
                    ?>
                         </tbody>
                    </table>
               </div>

          <nav>
          <ul class="pagination justify-content-center">
                        <li class="page-item">
                          <a class="page-link"<?php if($halamanbuku>1){echo"href='?halamanbuku=".$previousbuku."#buku'";}?> >Previous</a>
                        </li>
                        <?php 
                        for($x=1;$x<=$total_halaman_buku;$x++){
                        ?>
                        <li class="page-item">
                        <a class="page-link" href="?halamanbuku<?php echo $x ?>&#buku"><?php echo $x;?></a>
                        </li>
                        <?php
                        }
                          ?>
                          <li class="page-item">
                              <a class="page-link" <?php if($halamanbuku < $total_halaman_buku){echo"href='?halamanbuku=".$nextbuku."#buku'";} ?>>Next</a>
                          </li>
                    </ul>
                </nav>  
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <p style="text-align: center;font-size: 11px"> 
        Pemograman Web SMKN 24 Jakarta <br>  
        &copy; 2021 Hari Gunawan
      </p>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display  = "none";
}
</script>

</body>
</html>