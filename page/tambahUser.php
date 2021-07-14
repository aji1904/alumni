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
    if (isset($_POST['simpan_user'])) {
      $nama = $_POST['nama'];
      $username = $_POST['username'];
      $password = md5($_POST['password']);
      $email = $_POST['email'];
      $telepon = $_POST['telepon'];

      // cek user
      $cek_user = mysqli_query($CONNECT, "Select username from user where username='".$username."' ");
      
      if (mysqli_num_rows($cek_user) > 0) {
        $_SESSION['message'] = '<div class="alert alert-danger ml-3 mr-3 mt-3">
                                <span><b>USERNAME Sudah Terdaftar</b></span>
                                </div>';
      }else {
        $simpan_user = mysqli_query($CONNECT, "INSERT INTO user (nama,username,password,email,no_hp) values ('".$nama."','".$username."','".$password."','".$email."','".$telepon."')");
        $_SESSION['message'] = '<div class="alert alert-Success ml-3 mr-3 mt-3">
                                <span><b>DATA Berhasil Ditambah</b></span>
                                </div>';
      }
    }

      include "components/sidebar.php";
    ?>
    
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <?php
        include_once "components/navbar.php";
      ?>
      
      <div class="panel-header panel-header-sm mb-3">
        <div class="header text-center">
          <h5 class="title">Tambah User Access</h5>
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
                <form method="POST">
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                      </div>
                    </div>
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="username" required>
                      </div>
                    </div>
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="email" required>
                      </div>
                    </div>
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Nomor Telepon</label>
                        <input type="number" class="form-control" name="telepon" required placeholder="0812331122990">
                      </div>
                    </div>
                  </div>
                  
                  <button class="btn btn-success btn-block" name="simpan_user">Simpan</button>
                </form>
                
                <a href="<?= $url?>?page=listuser" class="btn btn-primary btn-block" name="lihat_user">Lihat Data</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>