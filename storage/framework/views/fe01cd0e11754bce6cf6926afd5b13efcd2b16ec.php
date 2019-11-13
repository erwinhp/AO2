<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Index</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo e(URL::to('/')); ?>/img/favicon.ico">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="index.html" class="navbar-brand d-none d-sm-inline-block">
                  <div class="brand-text d-none d-lg-inline-block"><span>Anggaran</span><strong>Operasional</strong></div>
                  <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
                <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
                <!-- Notifications-->

                <!-- Logout    -->
                <li class="nav-item"><a href="login.html" class="nav-link logout"> <span class="d-none d-sm-inline">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <!-- <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="img/luls.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">M. Erwin</h1>
              <p>Job Description</p>
            </div>
          </div> -->

          <ul class="list-unstyled">
            <li class="active"><a href="index.html"> <i class="icon-home"></i>Home</a></li>
            <li><a href="/MA"> <i class="icon-grid"></i>Monitoring Aggaran </a></li>
            <!-- <li><a href="charts.html"> <i class="fa fa-bar-chart"></i>Charts </a></li>
            <li><a href="forms.html"> <i class="icon-padnote"></i>Forms </a></li> -->

            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>RAB KHS</a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="#">Upload Excel</a></li>
                <li><a href="#">Entri RAB</a></li>
              </ul>
            </li>

            <li><a href="#exampledropdownDropdown1" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>RAB NON KHS</a>
              <ul id="exampledropdownDropdown1" class="collapse list-unstyled ">
                <li><a href="#">Upload Excel</a></li>
                <li><a href="#">Entri RAB</a></li>
              </ul>
            </li>

            <li><a href="#exampledropdownDropdown2" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Pengadaan</a>
              <ul id="exampledropdownDropdown2" class="collapse list-unstyled ">
                <li><a href="#">Monitro Proses Pengadaan</a></li>
                <li><a href="#">Salinan SPBJ/Kontrak</a></li>
              </ul>
            </li>

            <li><a href="#exampledropdownDropdown3" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Konstruksi</a>
              <ul id="exampledropdownDropdown3" class="collapse list-unstyled ">
                <li><a href="#">Pengawasan</a></li>
                <li><a href="#">Input Data Laporan Berkala</a></li>
                <li><a href="#">Monitoring Pekerjaan</a></li>
                <li><a href="#">Laporan Realisasi Fisik</a></li>
                <li><a href="#">Chart</a></li>
                <li><a href="#">Raport Mitra Kerja</a></li>
              </ul>
            </li>

            <li><a href="#exampledropdownDropdown4" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Konstruksi</a>
              <ul id="exampledropdownDropdown4" class="collapse list-unstyled ">
                <li><a href="#">Monitoring Pembayaran</a></li>
                <li><a href="#">Input Data Pembayaran</a></li>

              </ul>
            </li>


          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Dashboard</h2>
            </div>
          </header>

          <?php echo $__env->yieldContent('content'); ?>

        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="<?php echo e(URL::to('/')); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo e(URL::to('/')); ?>/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="<?php echo e(URL::to('/')); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo e(URL::to('/')); ?>/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?php echo e(URL::to('/')); ?>/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo e(URL::to('/')); ?>/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?php echo e(URL::to('/')); ?>/js/charts-home.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>
<?php /**PATH D:\etc\PEMBELAJARAN\project\AO2\resources\views/layouts/indexform.blade.php ENDPATH**/ ?>