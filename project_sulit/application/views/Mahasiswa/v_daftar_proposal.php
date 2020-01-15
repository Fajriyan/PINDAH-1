<div class="right_col" role="main" style="min-height: 4019px;">
    <div class="">
        <div class="page-title">


        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>DAFTAR Proposal <small>Silahkan Mengisi Form di Bawah</small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br>
                        <!-- <form class="form-horizontal form-label-left" method="post" action="<?= base_url('index.php/daftar_judul'); ?>"> -->
                        <?php echo form_open_multipart('index.php/daftar_proposal/upload_draf/') ?>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">JUDUL PROPOSAL </label>
                            <div class="col-md-6 col-sm-6 ">
                                <!-- <input type="text" id="judul" name="judul" required="required" class="form-control"> -->
                                <textarea class="form-control" id="judul" name="judul" rows="3" placeholder="Tulis JUDUL PROPOSAL"></textarea>
                                <?= form_error('judul', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">DRAFT PROPOSAL<br>
                                <medium>doc|docx|pdf|txt</medium>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="file" id="draf1" name="draf1">
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <button class="btn btn-primary" type="reset">Reset</button>
                                <button type="submit" class="btn btn-success">Ajukan Judul</button>
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