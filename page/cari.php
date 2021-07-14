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
  // handle agar tidak bisa langsung masuk cari
  
  // jika tekan login
  if (isset($_POST['login'])) {
    $username = $_POST['user'];
    $password = md5($_POST['password']);

    $cek_user = mysqli_query($CONNECT, "SELECT * FROM admin WHERE username='".$username."' ");
    
    if (mysqli_num_rows($cek_user) == 1) {
      $cek_user_password_admin = mysqli_query($CONNECT, "Select password from admin where password='".$password."'");
      if (mysqli_num_rows($cek_user_password_admin) == 1) {
        $_SESSION['user'] = "admin";
      } else {
        $_SESSION['message'] = "Password admin Salah";
        header("location:".$url."?page=login");
      }
    }
  
    if (mysqli_num_rows($cek_user) == 0) {
      $cek_user_biasa = mysqli_query($CONNECT, "Select username from user where username='".$username."'");
      if (mysqli_num_rows($cek_user_biasa) == 1) {
        // cek password
        $cek_user_password = mysqli_query($CONNECT, "Select password from user where password='".$password."'");
        if (mysqli_num_rows($cek_user_password) == 1) {
          $_SESSION['user'] = "user";
        } else {
          $_SESSION['message'] = "Password Anda Salah";
          header("location:".$url."?page=login");
        }
      } else {
        $_SESSION['message'] = "Username Tidak Terdaftar";
        header("location:".$url."?page=login");
      } 
    }

  }

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
