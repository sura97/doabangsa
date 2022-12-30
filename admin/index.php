<!DOCTYPE html>
<html lang="en">

<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>SMK DOA BANGSA </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link rel="stylesheet" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
	<!-- Datatable -->
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="images/logo-white.png" alt="">
                <img class="logo-compact" src="images/logo-text-white.png" alt="">
                <img class="brand-title" src="images/logo-text-white.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell ai-icon" href="#" role="button" data-toggle="dropdown">
                                    <svg id="icon-user" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
										<path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
										<path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
									</svg>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img src="images/profile/education/pic1.jpg" width="20" alt="">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="email-inbox.html" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="page-login.html" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu Sekolah</li>
                   
					<li><a class="ai-icon" href="event-management.html" aria-expanded="false">
							<i class="la la-home"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="la la-building"></i>
                            <span class="nav-text">Portal Sekolah</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="?pg=dataprofil">Profil</a></li>
                            <!-- <li><a href="?pg=datavisimisi">Visi & Misi</a></li> -->
                            <li><a href="?pg=saranaprasarana">Sarana & Prasarana</a></li>
                            <li><a href="?pg=ekstrakurikuler">Ekstrakurikuler</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Berita</a>
                                <ul aria-expanded="false">
                                    <li><a href="?pg=umum">Umum</a></li>
                                    <li><a href="?pg=akademik">Akademik</a></li>
                                    <li><a href="?pg=nonakademik">Non Akademik</a></li>
                                    
                                </ul>
                            </li>
                            <li><a href="?pg=pesan">Pesan</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Galeri</a>
                                <ul aria-expanded="false">
                                    <li><a href="?pg=g.foto">Foto</a></li>
                                    <li><a href="?pg=g.video">Video</a></li>
                                    
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="la la-building"></i>
                            <span class="nav-text">Data Referensi</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="?pg=tahunpelajaran">Tahun Pelajaran</a></li>
                            <li><a href="?pg=jabatan">Jabatan</a></li>
                            <li><a href="?pg=kompetensi">Kompetensi Keahlian</a></li>
                            <li><a href="?pg=kelas.rombel">Kelas/Rombel</a></li>
                            <li><a href="?pg=mapel">Mata Pelajaran</a></li>
                            
                        </ul>
                    </li>
					
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-users"></i>
							<span class="nav-text">Data Master</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="all-students.html">Staff Pendidik</a></li>
                            <li><a href="add-student.html">Siswa</a></li>
                            <li><a href="edit-student.html">Migrasi Siswa</a></li>
                            <li><a href="about-student.html">Staff Kepegawaian</a></li>

                        </ul>
                    </li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-graduation-cap"></i>
							<span class="nav-text">Data Lulusan</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="all-courses.html">Dashboard</a></li>
                            <li><a href="add-courses.html">Data Alumni</a></li>
                            <li><a href="edit-courses.html">Laporan Data Alumni</a></li>
                            
                        </ul>
                    </li>
					
										
                    <li class="nav-label">Management PPDB</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-users"></i>
							<span class="nav-text">Calon Siswa</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="?pg=datacalonsiswa">Data Siswa</a></li>
                            
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="la la-dollar"></i>
							<span class="nav-text">Pembayaran</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="chart-flot.html">Flot</a></li>
                            <li><a href="chart-morris.html">Morris</a></li>
                            <li><a href="chart-chartjs.html">Chartjs</a></li>
                           
                        </ul>
                    </li>
                    <li class="nav-label">E-learning</li>
                    <li><a href="widget-basic.html" aria-expanded="false">
                            <i class="la la-desktop"></i>
                            <span class="nav-text">Dashboard Learning</span>
                        </a></li>
                    <li class="mega-menu mega-menu-xl"><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="la la-globe"></i>
							<span class="nav-text">Pembelajaran</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Mengajar</a>
                                <ul aria-expanded="false">
                                    <li><a href="?pg=g.foto">Agenda Kelas</a></li>
                                    <li><a href="?pg=g.video">Absen Kelas</a></li>
                                    
                                </ul>
                            </li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Penilaian</a>
                                <ul aria-expanded="false">
                                    <li><a href="?pg=g.foto">Keterampilan</a></li>
                                    <li><a href="?pg=g.video">Sikap</a></li>
                                    
                                </ul>
                            </li>
                            <li><a href="ui-alert.html">Rekap Nilai</a></li>
                            
                            
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-book"></i>
							<span class="nav-text">UJIAN</span>
						</a>
                        <ul aria-expanded="false">
                            
                            <li><a href="uc-nestable.html">Data Soal</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Jadwal</a>
                                <ul aria-expanded="false">
                                    <li><a href="?pg=g.foto">Input Jadwal</a></li>
                                    <li><a href="?pg=g.video">Hasil Ujian</a></li>
                                    
                                </ul>
                            </li>
                            <li><a href="uc-noui-slider.html">Analisi Soal</a></li>
                           
                        </ul>
                    </li>
                    
                    <li class="nav-label">Pembayaran</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-file-text"></i>
							<span class="nav-text">Pembayaran Sekolah</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="form-element.html">SPP</a></li>
                            <li><a href="form-wizard.html">Sarana & Prasarana</a></li>
                            <li><a href="form-wizard.html">PPDB</a></li>
                        </ul>
                    </li>
                    
                     <li class="nav-label">Management Account</li>
                    
                       <li><a class="ai-icon" href="event-management.html" aria-expanded="false">
                            <i class="la la-users"></i>
                            <span class="nav-text">Daftar Account</span>
                        </a>
                    </li>
                    <li><a class="ai-icon" href="event-management.html" aria-expanded="false">
                            <i class="la la-lock"></i>
                            <span class="nav-text">Level Login</span>
                        </a>
                    </li>
                    </li>
                    
				</ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

		
		
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <?php 
switch (@$_GET['pg']) {
    case 'home':
        include 'Dashboard/index.php';
        break;

// PORTAL SEKOLAH
        case 'dataprofil':
        include 'Portal_sekolah/profil/index.php';
        break;
        case 'editprofil':
        include 'Portal_sekolah/profil/edit.php';
        break;

        case 'datavisimisi':
        include 'Portal_sekolah/visimisi/index.php';
        break;
           
        case 'saranaprasarana':
        include 'Portal_sekolah/saranaprasarana/index.php';
        break;
        // aksi
        case 'tambahsarana':
        include 'Portal_sekolah/saranaprasarana/tambah.php';
        break;
        // end aksi
        case 'ekstrakurikuler':
        include 'Portal_sekolah/ekstrakurikuler/index.php';
        break;

        case 'umum':
        include 'Portal_sekolah/berita/umum/index.php';
        break;

        case 'akademik':
        include 'Portal_sekolah/berita/akademik/index.php';
        break;
        case 'nonakademik':
        include 'Portal_sekolah/berita/nonakademik/index.php';
        break;


        case 'pesan':
        include 'Portal_sekolah/pesan/index.php';
        break;

        case 'g.foto':
        include 'Portal_sekolah/galeri/foto/index.php';
        break;
        case 'g.video':
        include 'Portal_sekolah/galeri/video/index.php';
        break;


// END PORTAL SEKOLAH
// ================================

// Data Referensi
        case 'tahunpelajaran':
        include 'Referensi/tahunpel/index.php';
        break;

        case 'jabatan':
        include 'Referensi/jabatan/index.php';
        break;

        case 'kompetensi':
        include 'Referensi/kompetensi/index.php';
        break;
        case 'tambahkompetensi':
        include 'Referensi/kompetensi/tambah.php';
        break;

        case 'kelas.rombel':
        include 'Referensi/kelas/index.php';
        break;
        case 'mapel':
        include 'Referensi/mapel/index.php';
        break;

// END Data Referensi




        include 'PPDB/index.php';
        break;


    default:
        include 'Dashboard/index.php';
        break;
}
?>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">DexignLab</a> 2020</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>	
	
	<!-- Datatable -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="js/plugins-init/datatables.init.js"></script>
	
    <!-- Svganimation scripts -->
    <script src="vendor/svganimation/vivus.min.js"></script>
    <script src="vendor/svganimation/svg.animation.js"></script>
    <script src="js/styleSwitcher.js"></script>
	
</body>
</html>