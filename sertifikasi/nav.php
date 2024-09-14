<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">BESMAS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <!--Menu Beranda-->
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.php">Beranda</a>
              </li>

              <!--Menu Data Master-->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Daftar Beasiswa
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="form-beasiswa.php">Form Pendaftaran</a></li>
                </ul>
              </li>

              <!--Menu Transaksi-->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Data Pendaftar
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="read-beasiswa.php">Rekap Data Pendaftar</a></li>
                </ul>
              </li>

              <!-- Menu Laporan
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Data Master
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Lap. Anggota</a></li>
                  <li><a class="dropdown-item" href="#">Lap. Peminjaman Buku</a></li>
                  <li><a class="dropdown-item" href="#">Lap. Pengembalian Buku</a></li>
                </ul>
              </li> -->
            </ul>
          </div>
        </div>
      </nav>