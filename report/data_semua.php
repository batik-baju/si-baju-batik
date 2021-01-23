<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Yang Terjual</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Pendataan Penjualan Baju Batik </h2>
                        <h4>Jalan Jendral Sudirman No.20, Air Joman, Sei Balai, Sendang Sari <br> Kisaran , Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>SELURUH DATA TERJUAL</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
                                
                            <tr>
                                <th>No.</th><th>Tanggal</th><th>Nama Baju</th><th>Harga Terjual<th>Total Harga</th><th>Jumlah</th><th>Laba</th>
                            </tr>
                        </thead>
                            <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tb_data";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                     <td><?= $nomor ?></td>
                                    <td><?= $data['tanggal'] ?></td>
                                    <td><?= $data['nama_baju'] ?></td>
                                    <td><?= $data['harga_terjual'] ?></td>
                                    <td><?= $data['total_harga'] ?></td>
                                    <td><?= $data['jumlah'] ?></td>
                                    <td><?= $data['laba'] ?></td>
                                    <td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                            </tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="8" class="text-right">
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