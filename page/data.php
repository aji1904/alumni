<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->

    <?php
      include "components/sidebar.php";
      
    ?>
    
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <?php
        include_once "components/navbar.php";
      ?>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm mb-3">
        <div class="header text-center">
          <h5 class="title">Tambah Data Alumni</h5>
        </div>
      </div>

      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
            <?php
              if (isset($_SESSION['message'])) {
                echo $_SESSION['message'];
                unset($_SESSION['message']);
              }
            ?>
              <div class="card-body">
                <form method="POST" action="<?= $url?>?page=control">
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>NIM</label>
                        <input type="number" name="nim" class="form-control" placeholder="NIM" required>
                      </div>
                    </div>
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                      </div>
                    </div>
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" name="lahir" class="form-control" placeholder="Tempat Lahir" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    
                  <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tanggal" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
                      </div>
                    </div>
                    <div class="col-md-2 pr-1">
                      <div class="form-group">
                        <label>Tahun Masuk</label>
                        <input type="text" class="yearpicker form-control" value="" name="tahun_masuk" required>
                      </div>
                    </div>
                    <div class="col-md-2 pr-1">
                      <div class="form-group">
                        <label>Tahun Lulus</label>
                        <input type="text" class="yearpicker form-control" value="" name="tahun_lulus" required>
                      </div>
                    </div>
                  </div>
                  
                  <button class="btn btn-success btn-block" name="simpan_alumni">Simpan</button>
                </form>
                
                <a href="<?= $url?>?page=listdata" class="btn btn-primary btn-block" name="lihat_data">Lihat Data</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>