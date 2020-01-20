<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<center>
		<h2>CETAK HASIL UJIAN</h2>

	</center>

	<br/>

	<div class="right_col" role="main" style="min-height: 1164px;">
    <div class="">
        <div class="page-title">



        </div>
        <div class="clearfix"></div>

        <div class="row">

            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                    <h2>HASIL UJIAN</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content"> 
                    <table class="table table-hover table-striped" id="mydata">


                     
      <thead>
        <tr>
          <th>No</th>
          <th>Komponen Penilaian</th>
          <th>Nilai</th>
          </tr>
      </thead>
      <tbody>
        <?php 
        foreach($data->result_array() as $row):
          $nilai1=$row['nilai1'];
          $nilai2=$row['nilai2'];
          $nilai3=$row['nilai3'];
      ?>
      <tr>
          <td>1</td>
          <td>efektifitas pada pendahuluan</td>
          <td><?php echo $nilai1;  ?></td>
          </tr>
      <tr>
          <td>2</td>
          <td>metodologi dan konten teknis</td>
          <td><?php echo $nilai2; ?></td>
      </tr>
      <tr>
          <td>3</td>
          <td>sikap saat presentasi</td>
          <td><?php echo $nilai3; ?> </td>
      </tr>
      </tbody>
    <?php endforeach; ?>


	<script>
		window.print();
	</script>
	
</body>
</html>