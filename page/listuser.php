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
  $tampilkan = mysqli_query($CONNECT,"Select id,nama,username,email,no_hp from user");
 
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
                        Username
                      </th>
                      <th>
                        Nama
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        No. HP
                      </th>
                      <th>
                        Action
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
                            <b>'.$value['username'].'</b>
                          </td>
                          <td>
                            '.$value['nama'].'
                          </td>
                          <td>
                          '.$value['email'].'
                          </td>
                          <td>
                          '.$value['no_hp'].'
                          </td>
                          <td>
                            <form action="'.$url.'?page=control" method="POST"> 
                            <button class="btn btn-danger" name="hapus_listuser">Hapus</button>
                            <input type="hidden" name="id" value="'.$value['id'].'">
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