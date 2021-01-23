<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Pendataan Baju Batik</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tb_data WHERE id='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Tanggal</td> <td><?= $data['tanggal'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Baju</td> <td><?= $data['nama_baju'] ?></td>
                        </tr>
                        <tr>
                            <td>Harga Terjual/pc</td> <td><?= $data['harga_terjual'] ?></td>
                        </tr>
						<tr>
                            <td>Total Harga</td> <td><?= $data['total_harga'] ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah</td> <td><?= $data['jumlah'] ?></td>
                        </tr>
						<tr>
                            <td>laba</td> <td><?= $data['laba'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=data&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data baju Terjuak </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

