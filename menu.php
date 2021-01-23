<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">

    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="?page=utama"> Sistem Informasi Pendataan Penjualan Baju Batik</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>

                <?php if(isset($_SESSION['level']) && $_SESSION['level']==1) { ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Master Data <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=stok&actions=tampil">Stok</a></li>
                        <li><a href="?page=data&actions=tampil">Data</a></li>
                        
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reports <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=stok&actions=report">Laporan Stok</a></li>
					    <li><a href="?page=data&actions=report">Laporan Data Terjual</a></li>
                    </ul>
                </li>
                 <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Video <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=videopembuatan&actions=tampil">Video Pembuatan</a></li>
                        <li><a href="?page=videopengunjung&actions=tampil">Video Pengunjung</a></li>
                    </ul>
                </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bio Data <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=biodataperisaputra&actions=tampil">Biodata Peri Saputra</a></li>
                        <li><a href="?page=biodatadicky&actions=tampil">Biodata Dicky Wahyudi</a></li>
                    </ul>
                </li>
                <li><a href="?page=user&actions=tampil">User</a></li>


                <?php } ?>

                
                <li><a href="?page=about&actions=tampil">About</a></li>
                

                    <?php if (isset($_SESSION['username'])) { ?>
                    <li><a href="logout.php">Logout</a></li>
                <?php } ?>

            </ul>
        </div>
    </div>
</nav>
