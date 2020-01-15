<div class="right_col" role="main" style="min-height: 4019px;">
    <div class="">
        <div class="page-title">


        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>DAFTAR JUDUL SKRIPSI <small>Silahkan Mengisi Form di Bawah</small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br>
                        <!-- <form class="form-horizontal form-label-left" method="post" action="<?= base_url('index.php/daftar_judul'); ?>"> -->
                        <?php echo form_open_multipart('index.php/form_seminar_hasil_skripsi') ?>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">NIM </label>
                            <div class="col-md-6 col-sm-6 ">
                                <!-- <input type="text" id="first-name" required="required" class="form-control "> -->
                                <input type="text" id="nim1" name="nim1" class="form-control" value="<?php echo $nn; ?>" readonly>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">NAMA LENGKAP </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $nama_user; ?>" readonly>
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>                      
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">JUDUL SKRIPSI </label>
                            <div class="col-md-6 col-sm-6 ">
                                <!-- <input type="text" id="judul" name="judul" required="required" class="form-control"> -->
                                <textarea class="form-control" id="judul" name="judul" rows="3" placeholder="Tulis Judul Skripsi Disini" readonly><?php foreach($judul as $get){echo $get->judul_skripsi;}?></textarea>
                                <?= form_error('judul', '<small class="text-danger pl-3">', '</small>') ?>
                                
                            </div>
                        </div>

                        
                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <button class="btn btn-primary" type="reset">Reset</button>
                                <button type="submit" class="btn btn-success">Daftar</button>
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