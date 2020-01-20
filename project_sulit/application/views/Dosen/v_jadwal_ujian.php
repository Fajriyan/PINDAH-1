
<div class="right_col" role="main" style="min-height: 1164px;">
    <div class="">
        <div class="page-title">



        </div>
        <div class="clearfix"></div>

        <div class="row">

            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                    <h2>Jadwal Ujian Skripsi</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content"> 
                    
	<table class="table table-hover table-striped" id="mydata">
		<thead>
			<tr>
				<th>No</th>
				<th>NPM</th>
				<th>Nama</th>
				<th>Judul Skripsi</th>
				<th>Penguji</th>
				<th>Pelaksanaan</th>
               
			</tr>
		</thead>
		<tbody>
			<?php $i=1; ?>
			<?php $a=1 ?>
			<?php foreach ($data->result_array() as $row): ?>

				<tr>
		
					<td width="1px"><?= $i; ?></td>
					<td width="30px"><?php echo $row["nim"]; ?></td>
					<td width="30px"><?php echo $row["nama"]; ?></td>
					<td width="150px"><?php echo $row["judul_skripsi"]; ?></td>


					<td width="200px"><?php echo $a,". ", $row["penguji1"],"<br>",$a+1,". ", $row["penguji2"],"<br>",$a+2,". ", $row["penguji3"]; ?></td>


					<td width="30px"><?php echo "Tanggal : ", $row["tgl_ujian"],"<br>"," Jam : ",$row["jam_ujian"],"<br>"," Tempat : ",$row["ruang_ujian"]; ?></td>

				</tr>
				<?php  $i++; ?>
			<?php endforeach ?>

		</tbody>
	</table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
	
</div>




 ?>