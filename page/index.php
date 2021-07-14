  <!-- Navbar -->
  
  <body class="offline-doc">
  <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
    <div class="container">
      <div class="navbar-wrapper">
        <div class="navbar-toggle">
          <button type="button" class="navbar-toggler">
            <span class="navbar-toggler-bar bar1"></span>
            <span class="navbar-toggler-bar bar2"></span>
            <span class="navbar-toggler-bar bar3"></span>
          </button>
        </div>
        <a class="navbar-brand" href="#pablo">Politeknik Negeri Sriwijaya</a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <ul class="navbar-nav">
          <li class="nav-item">
            <?php
              if ($_SESSION['user'] == "admin" || $_SESSION['user'] == "user") {
                echo '
                <a class="nav-link" href="'.$url.'?page=cari">
                  <i class="now-ui-icons shopping_shop"></i> Halaman Utama
                </a>
                ';
              } else {
                echo '
                <a class="nav-link" href="'.$url.'?page=login">
                  <i class="now-ui-icons users_single-02"></i> Login
                </a>
                ';
              }              
            ?>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="page-header clear-filter" filter-color="orange">
    <div class="page-header-image" style="background-image: url('assets/img/header.jpg');"></div>
    <div class="container text-center">
      <div class="col-md-8 ml-auto mr-auto">
        <div class="brand">
          <h1 class="title">
            Alumni Teknik Komputer
          </h1>
          <br>
          <!-- cari -->
          <form action="<?= $url?>?page=cari" method="POST">
            <div class="input-group no-border">
              <input type="text" name="data" class="form-control" placeholder="Cari Nama Alumni..." required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <i class="now-ui-icons ui-1_zoom-bold"></i>
                </div>
              </div>
            </div>
          </form>
          <br />
          <!-- menampilkan data -->
          <!-- <a href="https://demos.creative-tim.com/now-ui-dashboard/docs/1.0/getting-started/introduction.html" class="btn btn-primary btn-round btn-lg">View documentation</a> -->
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <!-- <div class=" container-fluid ">
      <nav>
        <ul>
          <li>
            <a href="https://www.creative-tim.com">
              Creative Tim
            </a>
          </li>
          <li>
            <a href="http://presentation.creative-tim.com">
              About Us
            </a>
          </li>
          <li>
            <a href="http://blog.creative-tim.com">
              Blog
            </a>
          </li>
        </ul>
      </nav>
      <div class="copyright" id="copyright">
        &copy; <script>
          document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
        </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
      </div>
    </div> -->
  </footer>
  <!--   Core JS Files   -->
  </body>