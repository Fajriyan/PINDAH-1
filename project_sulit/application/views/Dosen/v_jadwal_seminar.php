<div class="right_col" role="main" style="min-height: 1164px;">
    <div class="">
        <div class="page-title">



        </div>
        <div class="clearfix"></div>

        <div class="row">

            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Jadwal Seminar</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <table class="table table-hover table-striped" id="mydata">
                            <thead>
                                <tr>

                                    <th>NPM</th>
                                    <th>Nama</th>
                                    <th>jadwal seminar</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php $a = 1 ?>
                                <?php foreach ($data->result_array() as $row) : ?>

                                    <tr>

                                        <td width="1px"><?= $i; ?></td>
                                        <td width="30px"><?php echo $row["NPM"]; ?></td>
                                        <td width="30px"><?php echo $row["Nama"]; ?></td>
                                        <td width="200px"><?php echo $row["judul"]; ?></td>


                                        <td width="100px"><?php echo $a, ". ", $row["penguji_1"], "<br>", $a + 1, ". ", $row["penguji_2"], "<br>", $a + 2, ". ", $row["penguji_3"]; ?></td>


                                        <td width="30px"><?php echo "Tanggal : ", $row["Tgl_ujian"], "<br>", " Jam : ", $row["Jam"], "<br>", " Tempat : ", $row["Tempat"]; ?></td>

                                    </tr>
                                    <?php $i++; ?>
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