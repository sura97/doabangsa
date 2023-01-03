<!DOCTYPE html>
<html>

<head>
  <title>Portal</title>
  <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/style.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,400,400i,700,700i,900&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" /> -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" /> -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.compat.css" /> -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
      <img src="../assets/images/logo.png" class="logo" />
      <!-- <a class="navbar-brand" href="#">Navbar</a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?pg=siswa">Siswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ">Disabled</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <?php
  switch (@$_GET['pg']) {
    case 'detail':
      include 'pages/detail.php';
      break;

      // Divisi
    case 'siswa':
      include 'pages/siswa.php';
      break;
    case 'tambahdivisi':
      include 'divisi/tambah.php';
      break;
    case 'editdivisi':
      include 'divisi/edit.php';
      break;

      // Petugas
    case 'staff':
      include 'staff/staff.php';
      break;
    case 'tambahstaff':
      include 'staff/tambah.php';
      break;
    case 'editstaff':
      include 'staff/edit.php';
      break;

      // pengajuan
    case 'pengajuan':
      include 'pengajuan/pengajuan.php';
      break;
    case 'tambahpengajuan':
      include 'pengajuan/tambah.php';
      break;
    case 'editpengajuan':
      include 'pengajuan/edit.php';
      break;
    case 'cetakpengajuan':
      include 'pengajuan/cetak.php';
      break;

      // Barang
    case 'barang':
      include 'barang/barang.php';
      break;
    case 'tambahbarang':
      include 'barang/tambah.php';
      break;
    case 'editbarang':
      include 'barang/edit.php';
      break;



      // barang_masuk
    case 'barang_masuk':
      include 'barang_masuk/barang_masuk.php';
      break;
    case 'tambahbarang_masuk':
      include 'barang_masuk/tambah.php';
      break;
    case 'editbarang_masuk':
      include 'barang_masuk/edit.php';
      break;

      // barang_keluar
    case 'barang_keluar':
      include 'barang_keluar/barang_keluar.php';
      break;
    case 'tambahbarang_keluar':
      include 'barang_keluar/tambah.php';
      break;
    case 'editbarang_keluar':
      include 'barang_keluar/edit.php';
      break;
    case 'kwitansi':
      include 'barang_keluar/kwitansi.php';
      break;
    case 'laporan':
      include 'laporan/laporan.php';
      break;
    case 'laporan_divisi':
      include 'laporan/laporan_divisi.php';
      break;
    default:
      include 'pages/home.php';
      break;
  }
  ?>
</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="../assets/bootstrap/js/bootstrap.js"></script>
<script src="../assets/bootstrap/js//bootstrap.min.js"></script>

</html>
