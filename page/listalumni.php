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
  $tampilkan = mysqli_query($CONNECT,"Select id_mahasiswa, nama, tempat_lahir, tgl_lahir, alamat, tahun_masuk, tahun_lulus from data_alumni");
 
  include "components/sidebar.php";
    ?>
    
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <?php
        include_once "components/navbar.php";
      ?>
      
      <div class="panel-header panel-header-sm mb-3">
        <div class="header text-center">
          <h5 class="title">Data User Access</h5>
        </div>
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
              <?php
                if (isset($_SESSION['message'])) {
                  echo $_SESSION['message'];
                  $_SESSION['message'] = "";
                }
              ?>
              </div>
              <div class="card-body pt-0">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        No
                      </th>
                      <th>
                        NIM
                      </th>
                      <th>
                        Nama
                      </th>
                      <th>
                        Tempat & Tgl lahir
                      </th>
                      <th>
                        Alamat
                      </th>
                      <th>
                        Tahun Masuk
                      </th>
                      <th>
                        Tahun Lulus
                      </th>
                    </thead>
                    <tbody>
                      <?php
                        $num = 1;
                        foreach ($tampilkan as $data => $value) {
                          
                        echo '
                        <tr>
                          <td>
                            <b>'.$num.'</b>
                          </td>
                          <td>
                            <b>'.$value['id_mahasiswa'].'</b>
                          </td>
                          <td>
                            '.$value['nama'].'
                          </td>
                          <td>
                          '.$value['tempat_lahir'].', '.$value['tgl_lahir'].'
                          </td>
                          <td>
                          '.$value['alamat'].'
                          </td>
                          <td>
                          '.$value['tahun_masuk'].'
                          </td>
                          <td>
                          '.$value['tahun_lulus'].'
                          </td>
                          <td>
                            <form action="'.$url.'?page=control" method="POST"> 
                            <button class="btn btn-danger" name="hapus_listalumni">Hapus</button>
                            <input type="hidden" name="id" value="'.$value['id_mahasiswa'].'">
                            </form>
                          </td>
                        
                        </tr>
                        ';
                        $num++;
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>