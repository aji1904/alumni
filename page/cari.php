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
    $query_cari = "SELECT * FROM data_alumni WHERE id_mahasiswa LIKE '%".$cari."%' OR nama LIKE '%".$cari."%' OR tahun_masuk LIKE '%".$cari."%' OR tahun_lulus LIKE '%".$cari."%' ";
    $tampilkan = mysqli_query($CONNECT, $query_cari);
    
  } else if(isset($_SESSION['semua'])) {
    $query_cari = $_SESSION['semua'];
    $tampilkan = mysqli_query($CONNECT, $query_cari);
  } else {
    $query_cari = "SELECT * FROM data_alumni ";
    $tampilkan = mysqli_query($CONNECT, $query_cari);
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
                  if ( mysqli_num_rows($tampilkan) == 0) {
                    echo '
                    <div class="row">
                      <div class="alert alert-danger ml-3 mr-3 mt-3 col-md-8">
                      <span><b>Data Tidak Tersedia</b></span>
                      </div>
                      <div class="col-md-3 ml-3 mr-3 mt-3">
                        <form method="POST" action="'.$url.'?page=control"><button class="alert btn-primary btn-block" name="semua">Tampilkan Semua</button></form>
                      </div>
                    </div>
                    
                    ';
                  }
                }
                ?>
              </div>
              <div class="card-body pt-0">
                <div class="table-responsive">
                <table class="table" id="table_id">
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