    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
    
      <div class="logo">
        
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Alumni Tekkom
        </a>
      </div>
      
      

      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
        <?php
        // echo $_SESSION['user'];
        if ($_SESSION['user']=="tamu") {
          echo '
          <li>
            <a href="'.$home.'">
              <i class="now-ui-icons design_app"></i>
              <p>Home</p>
            </a>
          </li>
          <li class="active">
            <a href="'.$url.'?page=cari">
              <i class="now-ui-icons design_app"></i>
              <p>Data Alumni</p>
            </a>
          </li>
          ';
        } else if($_SESSION['user'] =="user"){
          echo '
          <li>
            <a href="'.$home.'">
              <i class="now-ui-icons design_app"></i>
              <p>Home</p>
            </a>
          </li>
          <li >
            <a href="'.$url.'?page=cari">
              <i class="now-ui-icons design_app"></i>
              <p>Data Alumni</p>
            </a>
          </li>
          <li>
            <a href="'.$url.'?page=data">
              <i class="now-ui-icons education_atom"></i>
              <p>Insert Data</p>
            </a>
          </li>
          <li>
            <a href="'.$url.'?page=profil">
              <i class="now-ui-icons location_map-big"></i>
              <p>Profil</p>
            </a>
          </li>
          
          ';
        } else {
          echo '
          <li>
            <a href="'.$home.'">
              <i class="now-ui-icons design_app"></i>
              <p>Home</p>
            </a>
          </li>
          <li >
            <a href="'.$url.'?page=cari">
              <i class="now-ui-icons design_app"></i>
              <p>Data Alumni</p>
            </a>
          </li>
          <li>
            <a href="'.$url.'?page=tambah">
              <i class="now-ui-icons design_app"></i>
              <p>User Access</p>
            </a>
          </li>
          <li>
            <a href="'.$url.'?page=data">
              <i class="now-ui-icons education_atom"></i>
              <p>Insert Data</p>
            </a>
          </li>
          <li>
            <a href="'.$url.'?page=profil">
              <i class="now-ui-icons location_map-big"></i>
              <p>Profil</p>
            </a>
          </li>
          
          ';
        }
        
      ?>
        </ul>
      </div>
    </div>
    