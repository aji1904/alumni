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
  
  // cari data
  if (isset($_POST['data'])) {
      
    $cari = $_POST['data'];
    $query_cari = "SELECT * FROM data_alumni WHERE id_mahasiswa='".$cari."' OR nama='".$cari."' OR tahun_masuk='".$cari."' OR tgl_lahir = '".$cari."' ";
    $cari_data = mysqli_query($CONNECT, $query_cari);
    $cek_data_alumni = mysqli_num_rows($cari_data);

  }
  
?>

<body class="">
  <div class="wrapper">
    
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
          <h5 class="title">Data Alumni</h5>
        </div>
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <?php
                if (isset($_POST['data'])) {
                  if ($cek_data_alumni == 0) {
                    echo '
                    <div class="alert alert-danger ml-3 mr-3 ">
                      <span><b>Data Alumni Tidak Ditemukan</b></span>
                    </div>
                    ';
                  }
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
                        NIP
                      </th>
                      <th>
                        Nama
                      </th>
                      <th>
                        Tempat & Tanggal Lahir
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
                      <tr>
                        <td>
                          <b>1</b>
                        </td>
                        <td>
                          <b>1234567890123456</b>
                        </td>
                        <td>
                          <b>AJI PRASETYO</b>
                        </td>
                        <td>
                          PALEMBANG, 19 april 2021
                        </td>
                        <td>
                          Jlan Sukarela Lrg Swadaya 2
                        </td>
                        <td>
                          2019
                        </td>
                        <td>
                          2021
                        </td>
                      
                      </tr>
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