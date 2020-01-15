<div class="right_col" role="main" style="min-height: 4019px;">
	<div class="">
		<div class="page-title">
			<div class="page-title-actions">
				<div class="d-inline-block dropdown">
					<?php
					if ($this->session->userdata('level') == '2') {
					?>


						
					<?php } ?>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="main-card mb-3 card">
					<div class="card-body" style="width: 100%; border-radius: 5px; border-style: none;">
						<h5 class="card-title">LIST PROPOSAL</h5>

						<table id="table" class="table table-striped table-bordered dataTable no-footer" style="width: 100%; border-radius: 5px; border-style: none;" role="grid" aria-describedby="datatable_info">
							<thead>
								<tr role="row" class="odd" style="width: 100%; border-radius: 5px; border-style: none;">
									<th>No</th>
									<th>NIM</th>
									<th>Nama</th>																		
									<th>STATUS JUDUL</th>
									<th>JUDUL PROPOSAL</th>
									<th>DRAFT PROPOSAL</th>

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
							"url": "<?php echo site_url('index.php/List_proposal/ajax_list') ?>",
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
						url: "<?php echo site_url('index.php/Skripsi/ajax_edit/') ?>/" + id,
						type: "GET",
						dataType: "JSON",
						success: function(data) {
							$('[name="hnpm"]').val(data.nim);
							$('[name="nim"]').val(data.nim);
							$('[name="nama"]').val(data.nama);
							$('[name="email"]').val(data.email);
							$('[name="hp"]').val(data.hp);
							$('[name="judul"]').val(data.judul_skripsi);
							// $('[name="status"]').val(data.status);
							$('[name="status_drop"]').val(data.status);
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
						url: "<?php echo site_url('index.php/Skripsi/ajax_edit/') ?>/" + id,
						type: "GET",
						dataType: "JSON",
						success: function(data) {
							$('[name="hnpm"]').val(data.nim);
							$('[name="nim"]').val(data.nim);
							$('[name="nama"]').val(data.nama);
							$('[name="email"]').val(data.email);
							$('[name="hp"]').val(data.hp);
							$('[name="status"]').val(data.status);
							$('[name="judul"]').val(data.judul_skripsi);
							$('[name="status_drop"]').val(data.status);
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
						url = "<?php echo site_url('index.php/Skripsi/ajax_add') ?>";
					} else {
						url = "<?php echo site_url('index.php/Skripsi/ajax_update') ?>";
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
								$('#npm_error').html(data.npm_error);
								$('#nama_error').html(data.nama_error);
								$('#program_studi_error').html(data.program_studi_error);
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
							url: "<?php echo site_url('index.php/Skripsi/ajax_delete/') ?>" + id,
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