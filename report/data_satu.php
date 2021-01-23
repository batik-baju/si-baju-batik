<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Terjual</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tb_data WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Pendataan Penjualan Baju Batik </h2>
                        <h4>Jalan Jendral Sudirman No.20, Air Joman, Sei Balai, Sendang Sari <br> Kisaran , Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA TERJUAL</h3>
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
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

                            </tbody>
                            <tfoot>
                                <tr>
                                     <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Peri Saputra, S.Kom<strong></u><br>
                                        NIP.17220372
                                    </td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
