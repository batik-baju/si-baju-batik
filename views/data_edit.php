<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tb_data WHERE id='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Peminjaman Arsip</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                     <form class="form-horizontal" action="" method="post">
                      
                              <div class="form-group">
                            <label for="tanggal" class="col-sm-3 control-label">Tanggal</label>
                            <div class="col-sm-3">
                                <input type="date" name="tanggal" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="nama_baju" class="col-sm-3 control-label">Nama Baju</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_baju" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Baju" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="harga_terjual" class="col-sm-3 control-label">Harga Terjual/pc</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga_terjual" class="form-control" id="inputEmail3" placeholder="Inputkan Harga Terjual" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="total_harga" class="col-sm-3 control-label">Total Harga</label>
                            <div class="col-sm-9">
                                <input type="text" name="total_harga" class="form-control" id="inputEmail3" placeholder="Inputkan Total" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="jumlah" class="col-sm-3 control-label">Jumlah</label>
                            <div class="col-sm-9">
                                <input type="text" name="jumlah" class="form-control" id="inputEmail3" placeholder="Inputkan jumlah" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="laba" class="col-sm-3 control-label">Laba</label>
                            <div class="col-sm-9">
                                <input type="text" name="laba"class="form-control" id="inputEmail3" placeholder="Inputkan Laba" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Baju Terjual</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=peminjaman&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Baju Terjual
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
     $tanggal=$_POST['tanggal'];
    $nama=$_POST['nama_baju'];
    $harga=$_POST['harga_terjual'];
    $total=$_POST['total_harga'];
  $jumlah=$_POST['jumlah'];
    $laba=$_POST['laba'];
    //buat sql
    $sql="UPDATE tb_data SET tanggal = '$tanggal', nama_baju='$nama', harga_terjual='$harga', total_harga='$total', jumlah='$jumlah', laba='$laba' WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=data&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



