<!DOCTYPE html>
<html lang="en-us">
  <head>
    <!-- Web config-->

    <!-- TABLE OF CONTENTS.
    Use search to find needed section.
    ===================================================================
    | 01. #CSS               | All CSS links and file paths           |
    | 02. #FAVICONS          | Favicon icon, app icons                |
    | 03. #BODY              | Body tag                               |
    | 04. #SIDEMENU          | Dashboard panel & left navigation      |
    | 05. #MAIN              | Dashboard right wrapper                |
    | 06. #VIEW              | Dashboard right wrapper inner wrapper  |
    | 07. #TOP               | Top header navigation                  |
    | 08. #TOP NAV           | Top header right navigation            |
    ===================================================================

    -->


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MonaResik</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- lib-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic">
    <!--
    link(rel='stylesheet' href='assets/stylesheets/ionicons.css')
    link(rel='stylesheet' href='assets/stylesheets/font-awesome.css')
    link(rel='stylesheet' href='assets/stylesheets/weather-icons.min.css')
    link(rel='stylesheet' href='assets/stylesheets/animate.css')
    link(rel='stylesheet' href='assets/stylesheets/glyphicon.css')

    -->

    <!--
    plugin
    link(rel='stylesheet' href='assets/stylesheets/plugin/bootstrap-table.css')
    link(rel='stylesheet' href='assets/stylesheets/plugin/nifty-modal.css')
    link(rel='stylesheet' href='assets/stylesheets/plugin/jquery.bootstrap-touchspin.css')
    link(rel='stylesheet' href='assets/stylesheets/plugin/select2.css')
    link(rel='stylesheet' href='assets/stylesheets/plugin/multi-select.css')
    link(rel='stylesheet' href='assets/stylesheets/plugin/ladda.min.css')
    link(rel='stylesheet' href='assets/stylesheets/plugin/daterangepicker.css')
    link(rel='stylesheet' href='assets/stylesheets/plugin/jquery.timepicker.css')
    link(rel="stylesheet" href="assets/stylesheets/plugin/jqvmap.css")
    link(rel="stylesheet" href="assets/stylesheets/plugin/bootstrap-submenu.css")
    link(rel="stylesheet" href="assets/stylesheets/plugin/code.css")
    link(rel="stylesheet" href="assets/stylesheets/plugin/jquery.dataTables.css")
    link(rel="stylesheet" href="assets/stylesheets/plugin/dataTables.bootstrap.css")
    link(rel="stylesheet" href="assets/stylesheets/plugin/jquery.gridster.css")
    link(rel="stylesheet" href="assets/stylesheets/plugin/summernote.css")
    link(rel="stylesheet" href="assets/stylesheets/plugin/bootstrap-markdown.min.css")
    link(rel="stylesheet" href="assets/stylesheets/plugin/bootstrap-select.css")
    link(rel="stylesheet" href="assets/stylesheets/plugin/asColorPicker.css")

    link(rel="stylesheet" href="assets/stylesheets/plugin/jquery-labelauty.css")
    link(rel="stylesheet" href="assets/stylesheets/plugin/owl.carousel.min.css")
    link(rel="stylesheet" href="assets/stylesheets/plugin/owl.theme.default.min.css")
    -->
<!--
THIS IS THE JS MADUDE
-->
<!-- <script src="assets/scripts/plugins/bootstrap-datepicker.js"></script> -->
  <!-- <script src="assets/scripts/plugins/moment.min.js"></script> -->
<!-- <script src="assets/bootstrap/js/bootstrap.min.js"></script> -->
    <!-- <script src="assets/scripts/lib/jquery-1.11.3.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.9/js/select2.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="assets/scripts/lib/tether.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-lite.min.js"></script>
<!-- 90
23Q -->
<script type="text/javascript" src="js/bootstrap-clockpicker.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="js/bootstrap-clockpicker.min.css">

    <!-- Concat all lib & plugins css-->
        <!-- THIS I FORGOT ROFL -->
        <!-- <link rel='stylesheet' href='assets/stylesheets/plugin/nifty-modal.css'> -->
        <!-- THIS FIAL THE DATEPICKER  -->
        <!-- <script src="js/tinymce.js" referrerpolicy="origin"></script> -->
    <link id="mainstyle" rel="stylesheet" href="assets/stylesheets/plugin/select2.css">
    <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css" rel="stylesheet"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
      <link id="mainstyle" rel="stylesheet" href="assets/stylesheets/theme-libs-plugins.css">
    <!-- <link rel="stylesheet" href="assets/stylesheets/plugin/bootstrap-datepicker.css"> -->

    <link id="mainstyle" rel="stylesheet" href="assets/stylesheets/skin.css">

    <!-- Demo only-->
    <link id="mainstyle" rel="stylesheet" href="assets/stylesheets/demo.css">

    <!-- This page only-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries--><!--[if lt IE 9]>
    <script src="assets/scripts/lib/html5shiv.js"></script>
    <script src="assets/scripts/lib/respond.js"></script><![endif]-->
    <script src="assets/scripts/lib/modernizr-custom.js"></script>
    <script src="assets/scripts/lib/respond.js"></script>
    <!-- Possible Classes
    ** Gradient style:
    * orchid
    * cadetblue
    * joomla
    * influenza2q
    * moss
    * mirage
    * stellar
    * servquick

    ** Flat style:
    * f-dark
    * f-dark-blue
    * f-blue
    * f-green

    ** Layout control
    * minibar
    * layout-drawer (changed the var on top)

    e.g
    <body class="moss layout-drawer">
    -->
  </head>

  <body class="cadetblue">

    <!-- #SIDEMENU-->
    <div class="mainmenu-block">
      <!-- SITE MAINMENU-->
      <nav class="menu-block">
        <ul class="nav">
          <li class="nav-item mainmenu-user-profile"><a href="user-profile.html">

              <div class="menu-block-label"><b>Nama Bos</b><br>Jabatan Bos</div></a></li>
        </ul>

        <ul class="nav">
          <li class="nav-item"><a class="nav-link" href="/home"><i class="icon ion-home"></i>
              <div class="menu-block-label">Home</div></a></li>


          <!-- <li class="nav-item"><a class="nav-link" href="/MA" ><i class="icon ion-monitor"></i>
              <div class="menu-block-label">Monitoring Anggaran</div></a></li> -->
              <li class="menu-block-has-sub nav-item"><a class="nav-link" href="#"><i class="icon ion-ios-list-outline"></i>
                  <div class="menu-block-label">Anggaran</div></a>
                <ul class="nav menu-block-sub">
                  <li class="nav-item"><a class="nav-link" href="/inputPRK ">Input PRK</a></li>
                  <li class="nav-item"><a class="nav-link" href="/MA">Monitor Anggaran</a></li>
                  <!-- <li class="nav-item"><a class="nav-link" href="/inputMA ">Input Anggaran</a></li> -->
                </ul>
              </li>



          <li class="menu-block-has-sub nav-item"><a class="nav-link" href="#"><i class="icon ion-ios-list-outline"></i>
              <div class="menu-block-label">Buat RAB</div></a>
            <ul class="nav menu-block-sub">
              <li class="nav-item menu-block-has-sub"><a href="#">RAB SPBJ</a>
                <ul class="nav menu-block-sub">
                  <li class="nav-item"><a class="nav-link" href="/excelrabkhs">Upload Excel</a></li>
                  <li class="nav-item"><a class="nav-link" href="/mrab">Entri RAB SPBJ</a></li>
                </ul>
              </li>

              <li class="nav-item menu-block-has-sub"><a href="#">RAB PK</a>
                <ul class="nav menu-block-sub">
                  <li class="nav-item"><a class="nav-link" href="/excelpk">Upload Excel</a></li>
                  <li class="nav-item"><a class="nav-link" href="/cmasterabpayung">Entri RAB PK</a></li>
                </ul>
              </li>

              <li class="nav-item menu-block-has-sub"><a href="#">RAB NON KHS</a>
                <ul class="nav menu-block-sub">
                  <li class="nav-item"><a class="nav-link" href="/excelrabnonkhs">Upload Excel</a></li>
                  <li class="nav-item"><a class="nav-link" href="/mrabnonkhs">Entri RAB NON KHS</a></li>
                </ul>
              </li>

            </ul>
          </li>

          <!-- RAB NON KHS -->
          <!-- <li class="menu-block-has-sub nav-item"><a class="nav-link" href="#"><i class="icon ion-ios-list-outline"></i>
            <div class="menu-block-label">Buat RAB NON KHS</div></a>
            <ul class="nav menu-block-sub">
              <li class="nav-item"><a class="nav-link" href="/excelrabnonkhs">Upload Excel</a></li>
              <li class="nav-item"><a class="nav-link" href="/mrabnonkhs">Entri RAB NON KHS</a></li>
            </ul>
          </li> -->


          <li class="menu-block-has-sub nav-item"><a class="nav-link" href="#"><i class="icon ion-cube"></i>
              <div class="menu-block-label">Pengadaan</div></a>
            <ul class="nav menu-block-sub">
              <li class="nav-item menu-block-has-sub"><a href="#">REN DAN</a>
                <ul class="nav menu-block-sub">
                  <li class="nav-item"><a class="nav-link" href="/iputvendors">Input Vendor</a></li>
                  <li class="nav-item"><a class="nav-link" href="/metodelelangs">Metode Lelang</a></li>
                </ul>
              </li>
              <li class="nav-item menu-block-has-sub"><a href="#">LAK DAN</a>
                <ul class="nav menu-block-sub">
                  <li class="nav-item"><a class="nav-link" href="/metodelelangs">Metode Lelang</a></li>
                  <li class="nav-item menu-block-has-sub"><a href="#">Pelelangan</a>
                    <ul class="nav menu-block-sub">
                      <li class="nav-item"><a class="nav-link" href="/indexviewjadwal">Jadwal Lelang</a></li>
                      <li class="nav-item"><a class="nav-link" href="/indexpesertalelangs">Peserta Lelang</a></li>
                      <li class="nav-item"><a class="nav-link" href="/rab_penawarans">Negosiasi Harga</a></li>
                      <li class="nav-item"><a class="nav-link" href="/buatkontraks">Buat Kontrak</a></li>
                    </ul>
                  </li>
                  <li class="nav-item menu-block-has-sub"><a href="#">Kontrak Rinci</a>
                    <ul class="nav menu-block-sub">
                      <li class="nav-item"><a class="nav-link" href="#">Buat Kontrak Rinci</a></li>
                      <li class="nav-item"><a class="nav-link" href="/mspbjpk">Buat Perintah Kerja</a></li>
                    </ul>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="/buatkontraks">Pengadaan Langsung</a></li>
                </ul>
              </li>

              <li class="nav-item menu-block-has-sub"><a href="#">Monitoring</a>
                <ul class="nav menu-block-sub">
                  <li class="nav-item"><a class="nav-link" href="#">Monitor Pengadaan</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Salinan Kontrak</a></li>
                </ul>
              </li>

            </ul>
          </li>



          <li class="menu-block-has-sub nav-item"><a class="nav-link" href="#"><i class="icon ion-android-funnel"></i>
              <div class="menu-block-label">Konstruksi</div></a>
            <ul class="nav menu-block-sub">
              <li class="nav-item menu-block-has-sub"><a href="#">Persiapan Kerja</a>
                <ul class="nav menu-block-sub">
                  <li class="nav-item"><a class="nav-link" href="/chart_ren">Time Schedule</a></li>
                  <li class="nav-item"><a class="nav-link" href="/cda">C D A</a></li>
                </ul>
              </li>

              <li class="nav-item menu-block-has-sub"><a href="#">Pelaksanaan Kerja</a>
                <ul class="nav menu-block-sub">
                  <li class="nav-item"><a class="nav-link" href="/bobot_pelaksanaan">Bobot Pelaksanaan</a></li>
                  <!-- <li class="nav-item"><a class="nav-link" href="/laporankonst">Pengawasan</a></li> -->
                  <li class="nav-item"><a class="nav-link" href="/inputpengawasans">Pengawasan</a></li>
                </ul>
              </li>


              <li class="nav-item menu-block-has-sub"><a href="#">Addendum</a>
                <ul class="nav menu-block-sub">
                  <li class="nav-item"><a class="nav-link" href="/addendums">Kerja Tambah/Kurang</a></li>
                  <li class="nav-item"><a class="nav-link" href="/chart_ren">Reschedule</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Justifikasi</a></li>
                </ul>
              </li>
              <li class="nav-item menu-block-has-sub"><a href="#">Monitor Kerja</a>
                <ul class="nav menu-block-sub">
                  <li class="nav-item"><a class="nav-link" href="/chartsbobot">Kurva S</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Monitoring Pekerjaan</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Raport Mitra Kerja</a></li>
                </ul>
              </li>







            </ul>
          </li>

          <li class="menu-block-has-sub nav-item"><a class="nav-link" href="#"><i class="icon ion-ios-grid-view-outline"></i>
              <div class="menu-block-label">Keuangan</div></a>
            <ul class="nav menu-block-sub">

              <li class="nav-item"><a class="nav-link" href="/verifikasirabs ">Pencadangan Anggaran</a></li>
              <!-- Input Monitoring FOrm -->
              <li class="nav-item"><a class="nav-link" href="/index_rencana_pembayaran">Rencana Pembayaran</a></li>
              <li class="nav-item"><a class="nav-link" href="/indexbayars">Pembayaran</a></li>
              <li class="nav-item"><a class="nav-link" href="/inputPembayaran">Monitoring Pembayaran</a></li>
              <!-- <li class="nav-item"><a class="nav-link" href="#">Input Data Berkala</a></li> -->
            </ul>
          </li>

          <li class="nav-item"><a class="nav-link" href="/home"><i class="icon ion-android-funnel"></i>
              <div class="menu-block-label">Asset Management</div></a></li>


        </ul>
        <!-- END SITE MAINMENU-->
      </nav>
    </div>

    <!-- #MAIN-->
    <div class="main-wrapper">

      <!-- VIEW WRAPPER-->
      <div class="view-wrapper">

        <!-- TOP WRAPPER-->
        <div class="topbar-wrapper">

          <!-- NAV FOR MOBILE-->
          <div class="topbar-wrapper-mobile-nav"><a class="topbar-togger js-minibar-toggler" href="#"><i class="icon ion-ios-arrow-back hidden-md-down"></i><i class="icon ion-navicon-round hidden-lg-up"></i></a><a class="topbar-togger pull-xs-right hidden-lg-up js-nav-toggler" href="#"><i class="icon ion-android-person"></i></a>

            <!-- ADD YOUR LOGO HEREText logo: a.topbar-wrapper-logo(href="#") MonaResik
            --><a class="topbar-wrapper-logo demo-logo" href="index.html">MonaResik</a>
          </div>
          <!-- END NAV FOR MOBILE-->

          <!-- SEARCH-->
          <div class="topbar-wrapper-search">
            <form>
              <input class="form-control" type="search" placeholder="Search"><a class="topbar-togger topbar-togger-search js-close-search" href="#"><i class="icon ion-close"></i></a>
            </form>
          </div>
          <!-- END SEARCH-->

          <!-- TOP RIGHT MENU-->
          <ul class="nav navbar-nav topbar-wrapper-nav">
            <li class="nav-item"><a class="nav-link js-search-togger" href="#"><i class="icon ion-ios-search-strong"></i></a></li>


<!--
 -->
            <li class="nav-item dropdown"><a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="icon ion-paintbucket"></i></a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                <div class="js-color-switcher demo-color-switcher">
                  <div class="dropdown-header">Flat</div>
                  <div class="list-inline"><a class="list-inline-item" href="#" data-color="f-dark">
                      <div class="demo-skin-grid f-dark"></div></a><a class="list-inline-item" href="#" data-color="f-dark-blue">
                      <div class="demo-skin-grid f-dark-blue"></div></a><a class="list-inline-item" href="#" data-color="f-blue">
                      <div class="demo-skin-grid f-blue"></div></a><a class="list-inline-item" href="#" data-color="f-green">
                      <div class="demo-skin-grid f-green"></div></a><a class="list-inline-item" href="#" data-color="f-deep-taupe">
                      <div class="demo-skin-grid f-deep-taupe"></div></a>
                  </div>
                  <div class="dropdown-header">Gradient</div>
                  <div class="list-inline"><a class="list-inline-item" href="#" data-color="orchid">
                      <div class="demo-skin-grid orchid"></div></a><a class="list-inline-item" href="#" data-color="cadetblue">
                      <div class="demo-skin-grid cadetblue"></div></a><a class="list-inline-item" href="#" data-color="joomla">
                      <div class="demo-skin-grid joomla"></div></a><a class="list-inline-item" href="#" data-color="influenza">
                      <div class="demo-skin-grid influenza"></div></a><a class="list-inline-item" href="#" data-color="moss">
                      <div class="demo-skin-grid moss"></div></a><a class="list-inline-item" href="#" data-color="mirage">
                      <div class="demo-skin-grid mirage"></div></a><a class="list-inline-item" href="#" data-color="stellar">
                      <div class="demo-skin-grid stellar"></div></a><a class="list-inline-item" href="#" data-color="servquick">
                      <div class="demo-skin-grid servquick"></div></a>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/logout')); ?>"><i class="icon ion-android-exit"></i></a></li>
            <li class="nav-item"><a class="nav-link close-mobile-nav js-close-mobile-nav" href="#"><i class="icon ion-close"></i></a></li>
            <!-- END TOP RIGHT MENU-->
          </ul>
        </div>
        <!--END TOP WRAPPER-->


        <!-- PAGE CONTENT HERE-->
        <div class="panel">
          <div class="page-header">
            <h4 class="page-header-title"><?php echo $__env->yieldContent('header'); ?></h4>
          </div>
        </div>
        <!-- END PAGE CONTENT-->
        <div class="panel panel-default">
          <div class="panel-body">
            <?php echo $__env->yieldContent('content'); ?>
          </div>
        </div>
      </div>
      <!-- END VIEW WAPPER-->

    </div>
    <!-- END MAIN WRAPPER-->



    <!-- WEB PERLOAD-->
    <div id="preload">
      <ul class="loading">
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>

    <!-- Lib-->


    <!-- Bootstrap js-->
    <!-- script(src="assets/bootstrap/js/bootstrap.min.js")-->

    <!-- Cookie js-->
    <!-- script(src="assets/scripts/plugins/js.cookie.js")-->

    <!-- Moment: Full featured date library for parsing, validating, manipulating, and formatting dates.-->
    <!-- script(src="assets/scripts/plugins/moment.min.js")-->

    <!-- Fastclick: Polyfill to remove click delays on browsers with touch UIs.-->
    <!-- script(src="assets/scripts/plugins/fastclick.js")-->

    <!-- Masonry: Grid layout library.-->
    <!-- script(src="assets/scripts/plugins/masonry.pkgd.min.js")-->

    <!-- Peity: is a simple jQuery plugin that converts an element's content into a simple <svg>.-->
    <!-- script(src="assets/scripts/plugins/jquery.peity.min.js")-->

    <!-- imagesloaded: Detect when images have been loaded.-->
    <!-- script(src="assets/scripts/plugins/imagesloaded.pkgd.js")-->

    <!-- MatchHeight: A responsive equal heights-->
    <!-- script(src="assets/scripts/plugins/jquery.matchHeight.js")-->

    <!-- Select2: JQuery based replacement for select boxes-->
    <!-- script(src="assets/scripts/plugins/select2.full.min.js")-->

    <!-- jQuery multiselect: jQuery plugin which is a drop-in replacement for the standard <select> element-->
    <!-- script(src="assets/scripts/plugins/jquery.multi-select.js")-->

    <!-- Bootstrap-tagsinput: jQuery tags input plugin based on Twitter Bootstrap.-->
    <!-- script(src="assets/scripts/plugins/bootstrap-tagsinput.js")-->

    <!-- Bootstrap-maxlength: Display the maximum lenght of the field-->
    <!-- script(src="assets/scripts/plugins/bootstrap-maxlength.min.js")-->

    <!-- Chartjs: Simple HTML5 Charts using the canvas element-->
    <!-- script(src="assets/scripts/plugins/Chart.min.js")-->
    <!-- script(src="assets/scripts/plugins/Chart.config.js")-->

    <!-- Bootstrap-touchspin: A mobile and touch friendly input spinner component for Bootstrap 3.-->
    <!-- script(src="assets/scripts/plugins/jquery.bootstrap-touchspin.min.js")-->

    <!-- Date Range Picker: A JavaScript component for choosing date ranges.-->
    <!-- script(src="assets/scripts/plugins/daterangepicker.js")-->

    <!-- jquery.timepicker: A lightweight, customizable javascript timepicker plugin.-->
    <!-- script(src="assets/scripts/plugins/jquery.timepicker.js")-->

    <!-- Bootstrap-submenu-->
    <!-- script(src="assets/scripts/plugins/bootstrap-submenu.js")-->

    <!-- Prismjs: Code syntax highlighting library-->
    <!-- script(src="assets/scripts/plugins/prism.js")-->

    <!-- bootstrap-table: An extended Bootstrap table-->
    <!-- script(src="assets/scripts/plugins/bootstrap-table.min.js")-->

    <!-- Grid layout-->
    <!-- script(src="assets/scripts/plugins/jquery.gridster.js")-->

    <!-- super simple slider-->
    <!-- script(src="assets/scripts/plugins/sss.min.js")-->

    <!-- Easy-pie-chart: Lightweight  pie charts-->
    <!-- script(src="assets/scripts/plugins/jquery.easypiechart.min.js")-->

    <!-- Summernote: Lightweight html5 editor-->
    <!-- script(src="assets/scripts/plugins/summernote.min.js")-->

    <!-- Bootstrap plugin for markdown editing-->
    <!-- script(src="assets/scripts/plugins/behave.js")-->
    <!-- script(src="assets/scripts/plugins/markdown.js")-->
    <!-- script(src="assets/scripts/plugins/to_markdown.js")-->
    <!-- script(src="assets/scripts/plugins/bootstrap-markdown.js")-->

    <!-- DataTables: It is a highly flexible HTML table.-->
    <!-- script(src="assets/scripts/plugins/jquery.dataTables.min.js")-->
    <!-- script(src="assets/scripts/plugins/dataTables.bootstrap.js")-->

    <!-- Ladda: Buttons with built-in loading indicators.-->
    <!-- script(src="assets/scripts/plugins/spin.min.js")-->
    <!-- script(src="assets/scripts/plugins/ladda.min.js")-->

    <!-- Counterup: Counts up to a targeted number when the number becomes visible.-->
    <!-- script(src="assets/scripts/plugins/waypoints.min.js")-->
    <!-- script(src="assets/scripts/plugins/jquery.counterup.min.js")-->

    <!-- Bootstrap-select: Bootstrap's dropdown.js to style and bring additional functionality to normal select boxes.-->
    <!-- script(src="assets/scripts/plugins/bootstrap-select.js")-->

    <!-- Bootstrap-select: Bootstrap's dropdown.js to style and bring additional functionality to normal select boxes.-->
    <!-- <script src="assets/scripts/plugins/bootstrap-datepicker.js"> </script> -->

    <!-- jQuery asColorPicker-->
    <!-- script(src="assets/scripts/plugins/jquery-asColor.js")-->
    <!-- script(src="assets/scripts/plugins/jquery-asGradient.js")-->
    <!-- script(src="assets/scripts/plugins/jquery-asColorPicker.js")-->

    <!-- Labelauty jQuery Plugin: checkboxes and radio buttons-->
    <!-- script(src="assets/scripts/plugins/jquery-labelauty.js")-->

    <!-- Simple upload ui-->
    <!-- script(src="assets/scripts/plugins/upload.js")-->

    <!-- parsleyjs: the ultimate JavaScript form validation library-->
    <!-- script(src="assets/scripts/plugins/parsley.min.js")-->

    <!-- Owl Carousel 2: Touch enabled jQuery plugin that lets you create a beautiful responsive carousel slider.-->
    <!-- script(src="assets/scripts/plugins/owl.carousel.js")-->

    <!-- Theme js-->
    <!-- Concat all plugins js-->
    <script src="assets/scripts/theme/theme-plugins.js"></script>
    <script src="assets/scripts/theme/main.js"></script>
    <!-- Below js just for this demo only-->
    <script src="assets/scripts/demo/demo-skin.js"></script>
    <script src="assets/scripts/demo/bar-chart-menublock.js"></script>
    <script src="<?php echo e(URL::to('/')); ?>/js/FileSaver.js"></script>
    <script src="<?php echo e(URL::to('/')); ?>/js/jquery.wordexport.js"></script>
    <script src="<?php echo e(URL::to('/')); ?>/js/excel/src/jquery.table2excel.js"></script>
    <!-- Below js just for this page only-->
    <!-- <script src="assets/scripts/demo/bar-chart.js"></script> -->
  </body>
</html>
<?php /**PATH D:\git\AO2\resources\views/layouts/indexNVM.blade.php ENDPATH**/ ?>