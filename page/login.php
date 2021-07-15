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

<body class="user-profile">
  <div class="wrapper">
    
    <div class="main-panel" style="width: 100%" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            
            <a class="navbar-brand" href="#pablo">Data Alumni</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
          
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="now-ui-icons users_single-02"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?= $url?>"><i class="now-ui-icons users_single-02"></i> Home</a>
                    <a class="dropdown-item" href="#"><i class="now-ui-icons users_circle-08"></i> Login</a>
                    
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content" style="text-align:center">
        
        <div class="card" style="max-width: 500px;">
        
          <div class="card-header" style="text-align:left">
            <h5 class="title">Login</h5>
          </div>
          <?php
            if (isset($_SESSION['message'])) {
              echo '
              <div class="alert alert-danger ml-3 mr-3 ">
                <span><b> Gagal Login </b> '.$_SESSION['message'].'</span>
              </div>
              ';
              unset($_SESSION['message']);
            }
          ?>
          
          <div class="card-body">
            <form method="POST" action="<?= $url?>?page=control">
              <div class="row">
                
                <div class="col-md-12 pr-2 pl-2"  style="text-align:left">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="user" class="form-control" placeholder="Username" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 pr-2 pl-2"  style="text-align:left">
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 pr-2 pl-2">
                  <button class="btn btn-primary btn-block" name="login">LOGIN</button>
                </div>
              </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
