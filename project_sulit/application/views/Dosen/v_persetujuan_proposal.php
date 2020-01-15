<div class="right_col" role="main" style="min-height: 4019px;">
	<div class="">
		<div class="page-title">
			<div class="page-title-actions">
				<div class="d-inline-block dropdown">
					<?php
					if ($this->session->userdata('level') == '2') {
					?>


						<button type="button" class="btn-shadow btn btn-primary" onclick="add_mahasiswa()"><i class='fa fa-plus-circle'></i>Tambah
						</button>
					<?php } ?>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="main-card mb-3 card">
					<div class="card-body" style="width: 100%; border-radius: 5px; border-style: none;">
						<h5 class="card-title">PERSETUJUAN PROPOSAL</h5>

						<table id="table" class="table table-striped table-bordered dataTable no-footer" style="width: 100%; border-radius: 5px; border-style: none;" role="grid" aria-describedby="datatable_info">
							<thead>
								<tr role="row" class="odd" style="width: 100%; border-radius: 5px; border-style: none;">
									<th>No</th>
									<th>NIM</th>
									<th>Nama</th>
									<th>EMAIL</th>
									<th>HP</th>
									<th>JUDUL SKRIPSI</th>
									<th>STATUS JUDUL</th>
									<th>JUDUL PROPOSAL</th>
									<th>DRAFT PROPOSAL</th>
									<th>STATUS PROPOSAL</th>
									<?php
									if ($this->session->userdata('level') == '2') {
									?>

									<?php } ?>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<script>
				var table;
				var save_method;

				$(document).ready(function() {
					show_datatables();
					pick_tanggal();
				});

				function show_datatables() {
					table = $('#table').DataTable({
						"fixedHeader": true,
						"processing": true, //Feature control the processing indicator.
						"serverSide": true, //Feature control DataTables' server-side processing mode.
						"order": [], //Initial no order.

						// Load data for the table's content from an Ajax source
						"ajax": {
							"url": "<?php echo site_url('index.php/Pesetujuan_proposal/ajax_list') ?>",
							"type": "POST"
						},

						//Set column definition initialisation properties.
						"columnDefs": [{
							"targets": [0], //first column CARA AGAR BISA URUT 
							"orderable": false, //set not orderable
						}, ],
						"destroy": true
					});
				}

				function reload_table() {
					table.ajax.reload(null, false); //reload datatable ajax 
				}

				function reset_eror() {
					$('#npm_error').html('');
					$('#nama_error').html('');
					$('#program_studi_error').html('');
					$('#btnSave').attr('disabled', false);
				}

				function add_mahasiswa() {
					save_method = 'add';
					reset_eror();
					$('#form')[0].reset(); // reset form on modals
					$('.form-group').removeClass('has-error'); // clear error class
					$('.help-block').empty(); // clear error string
					$('#modal_form').modal('show'); // show bootstrap modal when complete loaded
					$('.modal-title').text('Tambah Mahasiswa'); // Set title to Bootstrap modal title   
				}

				function edit_mahasiswa(id) {
					save_method = 'update';
					reset_eror();
					$('#form')[0].reset(); // reset form on modals
					$('.form-group').removeClass('has-error'); // clear error class
					$('.help-block').empty(); // clear error string

					//Ajax Load data from ajax
					$.ajax({
						url: "<?php echo site_url('index.php/Pesetujuan_proposal/ajax_edit/') ?>/" + id,
						type: "GET",
						dataType: "JSON",
						success: function(data) {
							$('[name="hnpm"]').val(data.nim);
							$('[name="nim"]').val(data.nim);
							$('[name="nama"]').val(data.nama);
							$('#modal_form').modal('show'); // show bootstrap modal when complete loaded
							$('.modal-title').text('Edit Mahasiswa'); // Set title to Bootstrap modal title

						},
						error: function(jqXHR, textStatus, errorThrown) {
							alert('Error get data from ajax');
						}
					});
				}

				function view_mahasiswa(id) {
					save_method = 'update';
					reset_eror();
					$('#btnSave').attr('disabled', true);
					$('#form')[0].reset(); // reset form on modals
					$('.form-group').removeClass('has-error'); // clear error class
					$('.help-block').empty(); // clear error string

					//Ajax Load data from ajax
					$.ajax({
						url: "<?php echo site_url('index.php/Pesetujuan_proposal/ajax_edit/') ?>/" + id,
						type: "GET",
						dataType: "JSON",
						success: function(data) {
							$('[name="hnpm"]').val(data.nim);
							$('[name="nim"]').val(data.nim);
							$('[name="nama"]').val(data.nama);
							$('#modal_form').modal('show'); // show bootstrap modal when complete loaded
							$('.modal-title').text('View Mahasiswa'); // Set title to Bootstrap modal title

						},
						error: function(jqXHR, textStatus, errorThrown) {
							alert('Error get data from ajax');
						}
					});
				}

				function save() {
					$('#btnSave').text('saving...'); //change button text
					$('#btnSave').attr('disabled', true); //set button disable 
					var url;

					if (save_method == 'add') {
						url = "<?php echo site_url('index.php/Pesetujuan_proposal/ajax_add') ?>";
					} else {
						url = "<?php echo site_url('index.php/Pesetujuan_proposal/ajax_update') ?>";
					}

					// ajax adding data to database
					$.ajax({
						url: url,
						type: "POST",
						data: $('#form').serialize(),
						dataType: "JSON",
						success: function(data) {
							if (data.status) //if success close modal and reload ajax table
							{
								$('#modal_form').modal('hide');
								reload_table();
							} else {
								$('#nim_error').html(data.nim_error);
								$('#nama_error').html(data.nama_error);
								// $('#program_studi_error').html(data.program_studi_error);
							}

							$('#btnSave').text('save'); //change button text
							$('#btnSave').attr('disabled', false); //set button enable 
						},
						error: function(jqXHR, textStatus, errorThrown) {
							//alert('Error adding / update data');
							$('#btnSave').text('save'); //change button text
							$('#btnSave').attr('disabled', false); //set button enable 

						}
					});
				}

				function delete_mahasiswa(id) {
					if (confirm('Are you sure delete this data?')) {
						// ajax delete data to database
						$.ajax({
							url: "<?php echo site_url('index.php/Pesetujuan_proposal/ajax_delete/') ?>" + id,
							type: "POST",
							dataType: "JSON",
							success: function(data) {
								//if success reload ajax table
								$('#modal_form').modal('hide');
								reload_table();
							},
							error: function(jqXHR, textStatus, errorThrown) {
								alert('Error deleting data');
							}
						});

					}
				}
			</script>


		</div>
	</div>
</div>

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