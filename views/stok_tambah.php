<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Stok</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nama_baju" class="col-sm-3 control-label">Nama Baju</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="nama_baju" class="form-control">
                                    <option value="Batik Medan">Batik Medan</option>
                                    <option value="Batik Malang">Batik Malang</option>
                                    <option value="Batik Timur">Batik Timur</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ukuran_baju" class="col-sm-3 control-label">Ukuran Baju</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="ukuran_baju" class="form-control">
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                    <option value="XXL">XXL</option>
                                </select>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_masuk" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tgl_keluar" class="col-sm-3 control-label">Tanggal Keluar</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_keluar" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Keluar" required>
                            </div>
                        </div>


                        <!--Status-->

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Stok</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=stok&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Stok
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
 
  $nama=$_POST['nama_baju'];
    $ukuran=$_POST['ukuran_baju'];
    $masuk=$_POST['tgl_masuk'];
    $keluar=$_POST['tgl_keluar'];
  
    //buat sql
    $sql="INSERT INTO tb_stok VALUES ('','$nama','$ukuran','$masuk','$keluar')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Stok Error");
    if ($query){
        echo "<script>window.location.assign('?page=stok&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
