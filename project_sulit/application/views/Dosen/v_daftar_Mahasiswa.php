<div class="right_col" role="main" style="min-height: 4019px;">
    <div class="">
        <div class="page-title">


        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>DAFTAR MAHASISWA SKRIPSI <small>Silahkan Mengisi Form di Bawah</small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br>
                        <!-- <form class="form-horizontal form-label-left" method="post" action="<?= base_url('index.php/daftar_judul'); ?>"> -->
                        <?php echo form_open_multipart('index.php/Daftar_Mahasiswa') ?>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">NIM </label>
                            <div class="col-md-6 col-sm-6 ">
                                <!-- <input type="text" id="first-name" required="required" class="form-control "> -->
                                <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM MAHASISWA">
                                <?= form_error('nim', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">NAMA LENGKAP </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="nama" name="nama" class="form-control">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">USERNAME</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input id="username_mahasiswa" name="username_mahasiswa" class="form-control" type="text">
                                <?= form_error('username_mahasiswa', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">PASSWORD </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="pass" name="pass" class="form-control">
                                <?= form_error('pass', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">DAFTARKAN SEBAGAI</label>
                            <div class="col-md-6 col-sm-6 ">
                                <select name="level" id="level" class="form-control">
                                    <option value="-">SILAHKAN PILIH</option>
                                    <option value="1">User</option>
                                    <option value="2">Admin</option>
                                </select>
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <button class="btn btn-primary" type="reset">Reset</button>
                                <button type="submit" class="btn btn-success">Daftarkan Mahasiswa</button>
                            </div>
                        </div>
                        <?php echo form_close() ?>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>