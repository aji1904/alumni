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
          <h5 class="title">Edit Profil Anda</h5>
        </div>
      </div>

      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <?php
                  foreach ($tampilkan as $data => $value) {
                ?>
                <form method="POST" action="<?= $url?>?page=control">
                  <div class="row">
                  <?php if(!isset($_GET['id'])== "pass") {?>

                    <div class="col-md-12 pr-1">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" value="<?= $value['username']?>" placeholder="Username">
                        <input type="hidden" name="id" value="<?= $value['username']?>" >
                      </div>
                    </div>
                    <div class="col-md-12 pr-1">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="email" value="<?= $value['email']?>">
                      </div>
                    </div>
                    <?php 
                    }

                    if(isset($_GET['id'])== "pass") {?>
                    <div class="col-md-12 pr-1">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="password" value="<?= $value['password']?>">
                      </div>
                    </div>
                    <?php } ?>
                  </div>
                  <?php if ($_SESSION['user'] == "user" && !isset($_GET['id']) == "pass") { ?>
                  <div class="row">
                    <div class="col-md-12 pr-1">
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?= $value['nama']?>" >
                      </div>
                    </div>
                    <div class="col-md-12 pr-1">
                      <div class="form-group">
                        <label>Nomor Telepon</label>
                        <input type="number" class="form-control" name="no_hp" placeholder="0812312333" value="<?= $value['no_hp']?>"  >
                      </div>
                    </div>
                  </div>
                  <?php } ?>
                  <button class="btn btn-success btn-block" name="update_user">Update Profil</button>
                </form>

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
