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
if ($_SESSION['user'] =="admin") {
      
  $query_cari = "SELECT * FROM admin WHERE username='".$_SESSION['data']['username']."' ";
  $tampilkan = mysqli_query($CONNECT, $query_cari);
}

if ($_SESSION['user'] =="user") {
      
  $query_cari = "SELECT * FROM user WHERE username='".$_SESSION['data']['username']."' ";
  $tampilkan = mysqli_query($CONNECT, $query_cari);
  
}

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
          <h5 class="title">Profil Anda</h5>
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
                <?php
                  foreach ($tampilkan as $data => $value) {
                ?>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" value="<?= $value['username']?>" readonly>
                      </div>
                    </div>
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" readonly value="<?= $value['email']?>">
                      </div>
                    </div>
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" readonly value="<?= $value['password']?>">
                      </div>
                    </div>
                  </div>
                  <?php if ($_SESSION['user'] == "user") { ?>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" value="<?= $value['no_hp']?>" readonly>
                      </div>
                    </div>
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Nomor Telepon</label>
                        <input type="number" class="form-control" value="<?= $value['no_hp']?>" readonly >
                      </div>
                    </div>
                  </div>
                  <?php } ?>
                  <a href="<?= $url?>?page=editUser" class="btn btn-success btn-block" name="ubah_profil">Ubah Profil</a>
                  <a href="<?= $url?>?page=editUser&id=pass" class="btn btn-success btn-block" name="update_user_password">Ubah Password</a>

                <?php  
                } 
                
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
