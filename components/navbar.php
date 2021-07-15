<nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form method="POST" action="<?= $url?>?page=cari">
              <div class="input-group no-border">
                <input type="text" name="data" class="form-control" placeholder="Search..." required>
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
                  <?php
                    if ($_SESSION['user']=="admin" || $_SESSION['user']=="user") {
                      # code...
                      echo '<form method="POST" action='.$url.'?page=control><button name="logout" class="dropdown-item"><i class="now-ui-icons users_single-02"></i> Logout</button>';
                    }else{
                      echo '<a class="dropdown-item" href="'.$url.'?page=login"><i class="now-ui-icons users_circle-08"></i> Login</a>';
                    }
                  ?>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>