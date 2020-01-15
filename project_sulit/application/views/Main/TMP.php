<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="./assets/images/favicon.ico" type="image/ico" />

  <title><?php echo $title; ?></title>
  <link href="<?php echo base_url() . 'assets/css/jquery.dataTables.min.css' ?>" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="<?= base_url('assets/'); ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?= base_url('assets/'); ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="<?= base_url('assets/'); ?>vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="<?= base_url('assets/'); ?>vendors/iCheck/skins/flat/green.css" rel="stylesheet">

  <!-- bootstrap-progressbar -->
  <link href="<?= base_url('assets/'); ?>vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <!-- JQVMap -->
  <link href="<?= base_url('assets/'); ?>vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
  <!-- bootstrap-daterangepicker -->
  <link href="<?= base_url('assets/'); ?>vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="<?= base_url('assets/'); ?>build/css/custom.min.css" rel="stylesheet">

  <!-- Jquery-UI -->
  <link href="<?php echo base_url('assets/jquery-ui-1.10.0.custom.css'); ?>" rel="stylesheet">
  <!-- Datatables -->
  <link href="<?php echo base_url('assets/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/datatables.net-buttons-bs/css/buttons.bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/datatables.net-responsive-bs/css/responsive.bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/datatables.net-scroller-bs/css/scroller.bootstrap.min.css'); ?>" rel="stylesheet">

  <!-- jQuery -->
  <script src="<?php echo base_url('assets/jquery/dist/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/jquery/dist/jquery-ui-1.10.0.custom.min.js'); ?>"></script>

  <!-- Datatables -->
  <script src="<?php echo base_url('assets/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/datatables.net-buttons/js/dataTables.buttons.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/datatables.net-buttons-bs/js/buttons.bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/datatables.net-buttons/js/buttons.flash.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/datatables.net-buttons/js/buttons.html5.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/datatables.net-buttons/js/buttons.print.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/datatables.net-keytable/js/dataTables.keyTable.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/datatables.net-responsive/js/dataTables.responsive.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/datatables.net-responsive-bs/js/responsive.bootstrap.js'); ?>"></script>
  <script src="<?php echo base_url('assets/datatables.net-scroller/js/dataTables.scroller.min.js'); ?>"></script>
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="<?= base_url() ?>" class="site_title"> <span><?php echo $title; ?></span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="<?= base_url('assets/'); ?>images/img.png" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2><?php echo $nama_user; ?></h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a href="<?= base_url() ?>"><i class="fa fa-home"></i>Beranda</a></li>
                <?php
                if ($this->session->userdata('level') == '2') {
                ?>
                  <li><a href="<?= base_url('index.php/daftar_judul') ?>"><i class="fa fa-edit"></i>Daftar Judul</a></li>
                  <li><a href="<?= base_url('index.php/daftar_mahasiswa') ?>"><i class=" fa fa-upload"></i>Daftarkan Mahasiswa</a></li>
                  <li><a href="<?= base_url('index.php/Skripsi') ?>"><i class="fa fa-list-ol"></i>List Pendaftar</span></a></li>
                  <li><a href="<?= base_url('index.php/main/fitur_3') ?>"><i class="fa fa-check-circle"></i>Persetujuan</a></li>
                  <li><a href="<?= base_url('index.php/Set_Pembimbing') ?>"><i class="fa fa-user"></i>Set Pembimbing</a></li>
                  <li><a href="<?= base_url('index.php/list_mahasiswa') ?>"><i class="fa fa-list-ol"></i>List Mahasiswa</a></li>
                  <li><a href="<?php echo base_url('index.php/daftar_proposal') ?>"><i class="fa fa-book"></i>Daftar Proposal</a></li>
                  <li><a href="<?php echo base_url('index.php/List_Proposal3') ?>"><i class="fa fa-list-ol"></i>List Proposal</a></li>
                  <li><a href="<?php echo base_url('index.php/Acc_proposal') ?>"><i class="fa fa-check"></i>ACC Pembimbing</a></li>
                  <li><a href="<?php echo base_url('index.php/Pesetujuan_proposal') ?>"><i class="fa fa-bookmark"></i>Persetujuan Proposal</a></li>
                  <li><a href="<?php echo base_url('index.php/list_proposal') ?>"><i class="fa fa-tasks"></i>List Proposal Disetujui</a></li>
                  <li><a href="<?php echo base_url('index.php/form_seminar_hasil_skripsi') ?>"><i class="fa fa-sticky-note"></i>Daftar Seminar Hasil Skripsi</a></li>
                  <li><a href="<?php echo base_url('index.php/acc_pembimbing') ?>"><i class="fa fa-check"></i>ACC Pembimbing</a></li>
                  <li><a><i class="fa fa-calendar"></i>Jadwal Seminar</a></li>
                  <li><a><i class="fa fa-sign-in"></i>Daftar Ujian</a></li>
                  <li><a><i class="fa fa-check"></i>ACC Pembimbing</a></li>
                  <li><a href="<?= base_url('index.php/set_penguji') ?>"><i class="fa fa-check"></i>Set Penguji</a></li>
                  <li><a href="<?= base_url('index.php/set_penguji/jadwal_ujian') ?>"><i class="fa fa-calendar"></i>Jadwal Ujian</a></li>
                  <li><a><i class="fa fa-book"></i>Hasil Ujian</a></li>

                  <!-- ELSE IF -->

                <?php } else if ($this->session->userdata('level') == '1') { ?>
                  <li><a href="<?= base_url('index.php/daftar_judul') ?>"><i class="fa fa-edit"></i>Daftar Judul</a></li>
                  <li><a href="<?= base_url('index.php/Skripsi') ?>"><i class="fa fa-list-ol"></i>List Pendaftar</span></a></li>
                  <li><a href="<?= base_url('index.php/main/fitur_3') ?>"><i class="fa fa-check-circle"></i>Persetujuan</a></li>
                  <!-- <li><a href="<?= base_url('index.php/Set_Pembimbing') ?>"><i class="fa fa-user"></i>Set Pembimbing</a></li> -->
                  <li><a href="<?= base_url('index.php/list_mahasiswa') ?>"><i class="fa fa-list-ol"></i>List Mahasiswa</a></li>
                  <li><a href="<?php echo base_url('index.php/daftar_proposal') ?>"><i class="fa fa-book"></i>Daftar Proposal</a></li>
                  <li><a href="<?php echo base_url('index.php/List_Proposal3') ?>"><i class="fa fa-list-ol"></i>List Proposal</a></li>
                  <!-- <li><a href="<?php echo base_url('index.php/Acc_proposal') ?>"><i class="fa fa-check"></i>ACC Pembimbing</a></li> -->
                  <li><a href="<?php echo base_url('index.php/Pesetujuan_proposal') ?>"><i class="fa fa-bookmark"></i>Persetujuan Proposal</a></li>
                  <li><a href="<?php echo base_url('index.php/list_proposal') ?>"><i class="fa fa-tasks"></i>List Proposal Disetujui</a></li>
                  <li><a href="<?php echo base_url('index.php/form_seminar_hasil_skripsi') ?>"><i class="fa fa-sticky-note"></i>Daftar Seminar Hasil Skripsi</a></li>
                  <li><a href="<?php echo base_url('index.php/acc_pembimbing') ?>"><i class="fa fa-check"></i>ACC Pembimbing</a></li>
                  <li><a><i class="fa fa-calendar"></i>Jadwal Seminar</a></li>
                  <li><a><i class="fa fa-sign-in"></i>Daftar Ujian</a></li>
                  <li><a><i class="fa fa-check"></i>ACC Pembimbing</a></li>
                  <li><a href="<?= base_url('index.php/set_penguji') ?>"><i class="fa fa-check"></i>Set Penguji</a></li>
                  <li><a href="<?= base_url('index.php/set_penguji/jadwal_ujian') ?>"><i class="fa fa-calendar"></i>Jadwal Ujian</a></li>
                  <li><a><i class="fa fa-book"></i>Hasil Ujian</a></li>
                <?php } ?>
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
          <nav class="nav navbar-nav">
            <ul class=" navbar-right">
              <li class="nav-item dropdown open" style="padding-left: 15px;">
                <?php
                if ($this->session->userdata('level') == 'Admin') {
                ?>
                <?php } ?>
                <?php
                if ($this->session->userdata('level') == '') {
                ?>
                  <a href="<?= base_url('index.php/main/dosen') ?>"><input style="border-radius: 3px; border: none; height: 23px; color: white; background: #2A3F54;" type="button" value="LOGIN"></a>
                <?php } ?>


                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                  <img src="images/img.jpg" alt=""> <?php echo $nama_user; ?>
                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="javascript:;"> Profile</a>
                  <a class="dropdown-item" href="<?= base_url('index.php/login/logout') ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                </div>
              </li>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      <!-- page content -->



      <?php echo $_content; ?>

      <!-- Bootstrap modal -->
      <div id="modal_form" class="modal fade bs-example-modal-lg show" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="#" id="form" class="form-horizontal form-label-left">
                <div class="form-group">
                  <label class="control-label col-md-10 col-sm-10 col-xs-10">NIM</label>
                  <div class="col-md-7 col-sm-7 col-xs-7">
                    <input id="hnpm" name="hnpm" type="hidden">
                    <input id="nim" name="nim" placeholder="NPM" class="form-control" type="text" value="<?php echo set_value('nim'); ?>">
                    <span id="npm_error" class="text-danger"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-10 col-sm-10 col-xs-10">NAMA MAHASISWA</label>
                  <div class="col-md-7 col-sm-7 col-xs-7">
                    <input id="nama" name="nama" placeholder="Nama Mahasiswa" class="form-control" type="text" value="<?php echo set_value('nama'); ?>">
                    <span id="nama_error" class="text-danger"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-10 col-sm-10 col-xs-10">EMAIL MAHASISWA</label>
                  <div class="col-md-7 col-sm-7 col-xs-7">
                    <input id="email" name="email" placeholder="Email Mahasiswa" class="form-control" type="text" value="<?php echo set_value('email'); ?>">
                    <span id="nama_error" class="text-danger"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-10 col-sm-10 col-xs-10">NO HP MAHASISWA</label>
                  <div class="col-md-7 col-sm-7 col-xs-7">
                    <input id="hp" name="hp" placeholder="Nomor Handphone" class="form-control" type="text" value="<?php echo set_value('hp'); ?>">
                    <span id="nama_error" class="text-danger"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-10 col-sm-10 col-xs-10">JUDUL SKRIPSI</label>
                  <div class="col-md-7 col-sm-7 col-xs-7">
                    <input id="judul" name="judul" placeholder="Judul Skripsi" class="form-control" type="text" value="<?php echo set_value('judul'); ?>">
                    <span id="nama_error" class="text-danger"></span>
                  </div>
                </div>
                <!-- <div class="form-group">
                  <label class="control-label col-md-10 col-sm-10 col-xs-10">STATUS</label>
                  <div class="col-md-7 col-sm-7 col-xs-7">
                    <input id="status" name="status" placeholder="Status Judul" class="form-control" type="text" value="<?php echo set_value('status'); ?>">
                    <span id="nama_error" class="text-danger"></span>
                  </div>
                </div> -->
                <div class="form-group">
                  <label class="control-label col-md-10 col-sm-10 col-xs-10">Status Penerimaan Judul</label>
                  <div class="col-md-7 col-sm-7 col-xs-7">
                    <!-- <?php $kode = "id='program_studi' name='program_studi' class='form-control'";
                          echo form_dropdown('program_studi', $dd_program_studi, isset($default['dprogram_studi']) ? $default['dprogram_studi'] : '', $kode); ?> -->

                    <select name="status_drop" id="status_drop" class="form-control">
                      <option value="- MENUNGGU -">- MENUNGGU -</option>
                      <option value="DI TERIMA">JUDUL DI TERIMA</option>
                      <option value="REVISI">REVISI</option>
                      <option value="DI TOLAK">JUDUL DI TOLAK</option>
                    </select>

                    <span id="program_studi_error" class="text-danger"></span>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" id="btnSave" onclick="save()" class="btn btn-primary" style="margin-left: 5px;margin-bottom: 0px;">Simpan</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Bootstrap modal -->

 <!-- Bootstrap modal -->
 <div id="modal_accpembimbing" class="modal fade bs-example-modal-lg show" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="#" id="form1" class="form-horizontal form-label-left">
                <div class="form-group">
                  <label class="control-label col-md-10 col-sm-10 col-xs-10">NIM</label>
                  <div class="col-md-7 col-sm-7 col-xs-7">
                    <input id="hnpm" name="hnpm" type="hidden">
                    <input id="nim" name="nim" placeholder="NPM" class="form-control" type="text" value="<?php echo set_value('nim'); ?>">
                    <span id="npm_error" class="text-danger"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-10 col-sm-10 col-xs-10">NAMA MAHASISWA</label>
                  <div class="col-md-7 col-sm-7 col-xs-7">
                    <input id="nama" name="nama" placeholder="Nama Mahasiswa" class="form-control" type="text" value="<?php echo set_value('nama'); ?>">
                    <span id="nama_error" class="text-danger"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-10 col-sm-10 col-xs-10">EMAIL MAHASISWA</label>
                  <div class="col-md-7 col-sm-7 col-xs-7">
                    <input id="email" name="email" placeholder="Email Mahasiswa" class="form-control" type="text" value="<?php echo set_value('email'); ?>">
                    <span id="nama_error" class="text-danger"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-10 col-sm-10 col-xs-10">NO HP MAHASISWA</label>
                  <div class="col-md-7 col-sm-7 col-xs-7">
                    <input id="hp" name="hp" placeholder="Nomor Handphone" class="form-control" type="text" value="<?php echo set_value('hp'); ?>">
                    <span id="nama_error" class="text-danger"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-10 col-sm-10 col-xs-10">JUDUL SKRIPSI</label>
                  <div class="col-md-7 col-sm-7 col-xs-7">
                    <input id="judul" name="judul" placeholder="Judul Skripsi" class="form-control" type="text" value="<?php echo set_value('judul'); ?>">
                    <span id="nama_error" class="text-danger"></span>
                  </div>
                </div>
                <!-- <div class="form-group">
                  <label class="control-label col-md-10 col-sm-10 col-xs-10">STATUS</label>
                  <div class="col-md-7 col-sm-7 col-xs-7">
                    <input id="status" name="status" placeholder="Status Judul" class="form-control" type="text" value="<?php echo set_value('status'); ?>">
                    <span id="nama_error" class="text-danger"></span>
                  </div>
                </div> -->
                <div class="form-group">
                  <label class="control-label col-md-10 col-sm-10 col-xs-10">Status Seminar Hasil Skripsi</label>
                  <div class="col-md-7 col-sm-7 col-xs-7">
                    <!-- <?php $kode = "id='program_studi' name='program_studi' class='form-control'";
                          echo form_dropdown('program_studi', $dd_program_studi, isset($default['dprogram_studi']) ? $default['dprogram_studi'] : '', $kode); ?> -->

                    <select name="status_drop" id="status_drop" class="form-control">
                      <option value="- MENUNGGU -">- MENUNGGU -</option>
                      <option value="DI TERIMA">DI TERIMA</option>                      
                      <option value="DI TOLAK">DI TOLAK</option>
                    </select>

                    <span id="program_studi_error" class="text-danger"></span>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" id="btnSave" onclick="save()" class="btn btn-primary" style="margin-left: 5px;margin-bottom: 0px;">Simpan</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Bootstrap modal -->

      <!-- Bootstrap modal -->
      <div id="modal_form3" class="modal fade bs-example-modal-lg show" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="#" id="form3" class="form-horizontal form-label-left">
                <div class="form-group">
                  <label class="control-label col-md-10 col-sm-10 col-xs-10">NIM</label>
                  <div class="col-md-7 col-sm-7 col-xs-7">
                    <input id="hnpm" name="hnpm" type="hidden">
                    <input id="nim" name="nim" placeholder="NPM" class="form-control" type="text" value="<?php echo set_value('nim'); ?>">
                    <span id="npm_error" class="text-danger"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-10 col-sm-10 col-xs-10">NAMA MAHASISWA</label>
                  <div class="col-md-7 col-sm-7 col-xs-7">
                    <input id="nama" name="nama" placeholder="Nama Mahasiswa" class="form-control" type="text" value="<?php echo set_value('nama'); ?>">
                    <span id="nama_error" class="text-danger"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-10 col-sm-10 col-xs-10">EMAIL MAHASISWA</label>
                  <div class="col-md-7 col-sm-7 col-xs-7">
                    <input id="email" name="email" placeholder="Email Mahasiswa" class="form-control" type="text" value="<?php echo set_value('email'); ?>">
                    <span id="nama_error" class="text-danger"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-10 col-sm-10 col-xs-10">NO HP MAHASISWA</label>
                  <div class="col-md-7 col-sm-7 col-xs-7">
                    <input id="hp" name="hp" placeholder="Nomor Handphone" class="form-control" type="text" value="<?php echo set_value('hp'); ?>">
                    <span id="nama_error" class="text-danger"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-10 col-sm-10 col-xs-10">JUDUL SKRIPSI</label>
                  <div class="col-md-7 col-sm-7 col-xs-7">
                    <input id="judul" name="judul" placeholder="Judul Skripsi" class="form-control" type="text" value="<?php echo set_value('judul'); ?>">
                    <span id="nama_error" class="text-danger"></span>
                  </div>
                </div>
                <!-- <div class="form-group">
                  <label class="control-label col-md-10 col-sm-10 col-xs-10">STATUS</label>
                  <div class="col-md-7 col-sm-7 col-xs-7">
                    <input id="status" name="status" placeholder="Status Judul" class="form-control" type="text" value="<?php echo set_value('status'); ?>">
                    <span id="nama_error" class="text-danger"></span>
                  </div>
                </div> -->
                <div class="form-group">
                  <label class="control-label col-md-10 col-sm-10 col-xs-10">Status Penerimaan Judul</label>
                  <div class="col-md-7 col-sm-7 col-xs-7">
                    <!-- <?php $kode = "id='program_studi' name='program_studi' class='form-control'";
                          echo form_dropdown('program_studi', $dd_program_studi, isset($default['dprogram_studi']) ? $default['dprogram_studi'] : '', $kode); ?> -->

                    <select name="pembimbing" id="pembimbing" class="form-control">
                      <option value="- MENUNGGU -">- MENUNGGU -</option>
                      <option value="PAK AMAK">PAK AMAK</option>
                      <option value="PAK ZAINI">PAK ZAINI</option>
                      <option value="PAK AZIZ">PAK AZIZ</option>
                    </select>

                    <span id="program_studi_error" class="text-danger"></span>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" id="btnSave" onclick="save()" class="btn btn-primary" style="margin-left: 5px;margin-bottom: 0px;">Simpan</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Bootstrap modal -->
      <div id="modal_accpembimbing" class="modal fade bs-example-modal-lg show" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="#" id="form3" class="form-horizontal form-label-left">
                <form action="#" id="form1" class="form-horizontal form-label-left">
                  <div class="form-group">
                    <label class="control-label col-md-10 col-sm-10 col-xs-10">NIM</label>
                    <div class="col-md-7 col-sm-7 col-xs-7">
                      <input id="hnpm" name="hnpm" type="hidden">
                      <input id="nim" name="nim" placeholder="NPM" class="form-control" type="text" value="<?php echo set_value('nim'); ?>">
                      <span id="npm_error" class="text-danger"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-10 col-sm-10 col-xs-10">NAMA MAHASISWA</label>
                    <div class="col-md-7 col-sm-7 col-xs-7">
                      <input id="nama" name="nama" placeholder="Nama Mahasiswa" class="form-control" type="text" value="<?php echo set_value('nama'); ?>">
                      <span id="nama_error" class="text-danger"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-10 col-sm-10 col-xs-10">JUDUL SKRIPSI</label>
                    <div class="col-md-7 col-sm-7 col-xs-7">
                      <input id="judul" name="judul" placeholder="Judul Skripsi" class="form-control" type="text" value="<?php echo set_value('judul'); ?>">
                      <span id="nama_error" class="text-danger"></span>
                    </div>
                  </div>
                  <!-- <div class="form-group">
                  <label class="control-label col-md-10 col-sm-10 col-xs-10">STATUS</label>
                  <div class="col-md-7 col-sm-7 col-xs-7">
                    <input id="status" name="status" placeholder="Status Judul" class="form-control" type="text" value="<?php echo set_value('status'); ?>">
                    <span id="nama_error" class="text-danger"></span>
                  </div>
                </div> -->
                  <div class="form-group">
                    <label class="control-label col-md-10 col-sm-10 col-xs-10">Status Penerimaan Judul</label>
                    <div class="col-md-7 col-sm-7 col-xs-7">
                      <!-- <?php $kode = "id='program_studi' name='program_studi' class='form-control'";
                            echo form_dropdown('program_studi', $dd_program_studi, isset($default['dprogram_studi']) ? $default['dprogram_studi'] : '', $kode); ?> -->

                      <select name="pembimbing" id="pembimbing" class="form-control">
                        <option value="- MENUNGGU -">- MENUNGGU -</option>
                        <option value="PAK ABDUL AZIZ">PAK ABDUL AZIZ</option>
                        <option value="PAK WAHYUDI">PAK WAHYUDI</option>
                        <option value="PAK AMAK">PAK AMAK</option>
                      </select>

                      <span id="program_studi_error" class="text-danger"></span>
                    </div>
                  </div>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" id="btnSave" onclick="save()" class="btn btn-primary" style="margin-left: 5px;margin-bottom: 0px;">Simpan</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Bootstrap modal -->

      <!-- Bootstrap modal -->
      <div id="modal_form4" class="modal fade bs-example-modal-lg show" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="#" id="form4" class="form-horizontal form-label-left">
                <form action="#" id="form1" class="form-horizontal form-label-left">
                  <div class="form-group">
                    <label class="control-label col-md-10 col-sm-10 col-xs-10">NIM</label>
                    <div class="col-md-7 col-sm-7 col-xs-7">
                      <input id="hnpm" name="hnpm" type="hidden">
                      <input id="nim" name="nim" placeholder="NPM" class="form-control" type="text" value="<?php echo set_value('nim'); ?>">
                      <span id="npm_error" class="text-danger"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-10 col-sm-10 col-xs-10">NAMA MAHASISWA</label>
                    <div class="col-md-7 col-sm-7 col-xs-7">
                      <input id="nama" name="nama" placeholder="Nama Mahasiswa" class="form-control" type="text" value="<?php echo set_value('nama'); ?>">
                      <span id="nama_error" class="text-danger"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-10 col-sm-10 col-xs-10">JUDUL SKRIPSI</label>
                    <div class="col-md-7 col-sm-7 col-xs-7">
                      <input id="judul" name="judul" placeholder="Judul Skripsi" class="form-control" type="text" value="<?php echo set_value('judul'); ?>">
                      <span id="nama_error" class="text-danger"></span>
                    </div>
                  </div>
                  <!-- <div class="form-group">
                  <label class="control-label col-md-10 col-sm-10 col-xs-10">STATUS</label>
                  <div class="col-md-7 col-sm-7 col-xs-7">
                    <input id="status" name="status" placeholder="Status Judul" class="form-control" type="text" value="<?php echo set_value('status'); ?>">
                    <span id="nama_error" class="text-danger"></span>
                  </div>
                </div> -->
                  <div class="form-group">
                    <label class="control-label col-md-10 col-sm-10 col-xs-10">Status Penerimaan Judul</label>
                    <div class="col-md-7 col-sm-7 col-xs-7">
                      <!-- <?php $kode = "id='program_studi' name='program_studi' class='form-control'";
                            echo form_dropdown('program_studi', $dd_program_studi, isset($default['dprogram_studi']) ? $default['dprogram_studi'] : '', $kode); ?> -->

                      <select name="status_proposal1" id="status_proposal1" class="form-control">
                        <option value="- MENUNGGU -">- MENUNGGU -</option>
                        <option value="SETUJU">SETUJU</option>
                        <option value="REVISI">REVISI</option>
                        <option value="DI TOLAK">DI TOLAK</option>
                      </select>

                      <span id="program_studi_error" class="text-danger"></span>
                    </div>
                  </div>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" id="btnSave" onclick="save()" class="btn btn-primary" style="margin-left: 5px;margin-bottom: 0px;">Simpan</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Bootstrap modal -->

      <!-- /page content -->

      <!-- footer content -->
      <footer>
        <div class="pull-right">
          Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
        </div>
        <div class="clearfix"></div>
      </footer>
      <!-- /footer content -->
    </div>
  </div>

  <!-- jQuery -->
  <script src="<?= base_url('assets/'); ?>vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?= base_url('assets/'); ?>vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- FastClick -->
  <script src="<?= base_url('assets/'); ?>vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="<?= base_url('assets/'); ?>vendors/nprogress/nprogress.js"></script>
  <!-- Chart.js -->
  <script src="<?= base_url('assets/'); ?>vendors/Chart.js/dist/Chart.min.js"></script>
  <!-- gauge.js -->
  <script src="<?= base_url('assets/'); ?>vendors/gauge.js/dist/gauge.min.js"></script>
  <!-- bootstrap-progressbar -->
  <script src="<?= base_url('assets/'); ?>vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
  <!-- iCheck -->
  <script src="<?= base_url('assets/'); ?>vendors/iCheck/icheck.min.js"></script>
  <!-- Skycons -->
  <script src="<?= base_url('assets/'); ?>vendors/skycons/skycons.js"></script>
  <!-- Flot -->
  <script src="<?= base_url('assets/'); ?>vendors/Flot/jquery.flot.js"></script>
  <script src="<?= base_url('assets/'); ?>vendors/Flot/jquery.flot.pie.js"></script>
  <script src="<?= base_url('assets/'); ?>vendors/Flot/jquery.flot.time.js"></script>
  <script src="<?= base_url('assets/'); ?>vendors/Flot/jquery.flot.stack.js"></script>
  <script src="<?= base_url('assets/'); ?>vendors/Flot/jquery.flot.resize.js"></script>
  <!-- Flot plugins -->
  <script src="<?= base_url('assets/'); ?>vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
  <script src="<?= base_url('assets/'); ?>vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendors/flot.curvedlines/curvedLines.js"></script>
  <!-- DateJS -->
  <script src="<?= base_url('assets/'); ?>vendors/DateJS/build/date.js"></script>
  <!-- JQVMap -->
  <script src="<?= base_url('assets/'); ?>vendors/jqvmap/dist/jquery.vmap.js"></script>
  <script src="<?= base_url('assets/'); ?>vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="<?= base_url('assets/'); ?>vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="<?= base_url('assets/'); ?>vendors/moment/min/moment.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

  <!-- Custom Theme Scripts -->
  <!-- <script src="./build/js/custom.min.js"></script> -->
  <!-- <script src="<?= base_url('assets/'); ?>build/js/custom.min.js"></script> -->
  <!-- <script src="<?php echo base_url() . 'assets/js/jquery-2.2.4.min.js' ?>"></script> -->
  <!-- <script src="<?php echo base_url() . 'assets/js/bootstrap.js' ?>"></script> -->
  <script src="<?php echo base_url() . 'assets/js/jquery.dataTables.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/js/moment.js' ?>"></script>
  <!-- <script>
    $(document).ready(function() {
      $('#mydata').DataTable();
    });
  </script> -->





</body>


</html>