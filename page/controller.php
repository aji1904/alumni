<?php
// if login
if (isset($_POST['login'])) {
    $username = $_POST['user'];
    $password = md5($_POST['password']);
    
    $cek_user = mysqli_query($CONNECT, "SELECT * FROM admin WHERE username='".$username."' ");
    // cek user admin
    if (mysqli_num_rows($cek_user) == 1) {
        $cek_user_password_admin = mysqli_query($CONNECT, "Select password from admin where password='".$password."'");
        if (mysqli_num_rows($cek_user_password_admin) == 1) {
        $_SESSION['user'] = "admin";
        echo '<script>window.location = "'.$url.'?page=cari";</script>';
        } else {
        $_SESSION['message'] = "Password admin Salah";
        echo '<script>window.location = "'.$url.'?page=login";</script>';
        }
    }
    
    // cek user biasa
    if (mysqli_num_rows($cek_user) == 0) {
        $cek_user_biasa = mysqli_query($CONNECT, "Select username from user where username='".$username."'");
            if (mysqli_num_rows($cek_user_biasa) == 1) {
            // cek password
            $cek_user_password = mysqli_query($CONNECT, "Select password from user where password='".$password."'");
                if (mysqli_num_rows($cek_user_password) == 1) {
                    $_SESSION['user'] = "user";
                    echo '<script>window.location = "'.$url.'?page=cari";</script>';
                } else {
                    $_SESSION['message'] = "Password Anda Salah";
                    echo '<script>window.location = "'.$url.'?page=login";</script>';
                }
            } else {
                $_SESSION['message'] = "Username Tidak Terdaftar";
                echo '<script>window.location = "'.$url.'?page=login";</script>';
            } 
    }
    mysqli_close($CONNECT);   
}

// if Logout
if (isset($_POST['logout'])) {
    session_destroy();
    echo '<script>window.location = "'.$url.'";</script>';
    
}

// if hapus data list user
if (isset($_POST['hapus_listuser'])) {

    $hapus = mysqli_query($CONNECT,"delete from user where id='".$_POST['id']."'");
    $cek_user = mysqli_query($CONNECT, "Select id from user where id='".$_POST['id']."' ");
    
    if (mysqli_num_rows($cek_user) > 0) {
        $_SESSION['message'] = '<div class="alert alert-danger ml-3 mr-3 mt-3">
                                <span><b>GAGAL Berhasil di Hapus</b></span>
                                </div>';
        echo '<script>window.location = "'.$url.'?page=listuser";</script>';
        # code...
    } else {
         $_SESSION['message'] = '<div class="alert alert-success ml-3 mr-3 mt-3">
                                    <span><b>DATA Berhasil di Hapus</b></span>
                                    </div>';
            echo '<script>window.location = "'.$url.'?page=listuser";</script>';
    }
    mysqli_close($CONNECT);
}


// if hapus data list alumni
if (isset($_POST['hapus_listalumni'])) {

    $hapus = mysqli_query($CONNECT,"delete from data_alumni where id_mahasiswa='".$_POST['id']."'");
    $cek_user = mysqli_query($CONNECT, "Select id_mahasiswa from data_alumni where id_mahasiswa='".$_POST['id']."' ");
    if (mysqli_num_rows($cek_user) > 0) {
        $_SESSION['message'] = '<div class="alert alert-danger ml-3 mr-3 mt-3">
                                <span><b>GAGAL Berhasil di Hapus</b></span>
                                </div>';
        echo '<script>window.location = "'.$url.'?page=listdata";</script>';
    } else {
        $_SESSION['message'] = '<div class="alert alert-success ml-3 mr-3 mt-3">
                                    <span><b>DATA Berhasil di Hapus</b></span>
                                    </div>';
            echo '<script>window.location = "'.$url.'?page=listdata";</script>';
    }
    mysqli_close($CONNECT);
}

// if tambah user
if (isset($_POST['simpan_user'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];

    // cek user
    $cek_user = mysqli_query($CONNECT, "Select username from user where username='".$username."' ");
    
    if (mysqli_num_rows($cek_user) > 0) {
      $_SESSION['message'] = '<div class="alert alert-danger ml-3 mr-3 mt-3">
                              <span><b>USERNAME Sudah Terdaftar</b></span>
                              </div>';
                              echo '<script>window.location = "'.$url.'?page=tambah";</script>';                     
    }else {
      $simpan_user = mysqli_query($CONNECT, "INSERT INTO user (nama,username,password,email,no_hp) values ('".$nama."','".$username."','".$password."','".$email."','".$telepon."')");
      if ($simpan_user) {
        $_SESSION['message'] = '<div class="alert alert-success ml-3 mr-3 mt-3">
                              <span><b>DATA Berhasil di Tambahkan</b></span>
                              </div>';
                              echo '<script>window.location = "'.$url.'?page=tambah";</script>';
      }
    }
    mysqli_close($CONNECT);
  }

  
  if (isset($_POST['simpan_alumni'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $lahir = $_POST['lahir'];
    $tanggal = $_POST['tanggal'];
    $alamat = $_POST['alamat'];
    $tahun_masuk = $_POST['tahun_masuk'];
    $tahun_lulus = $_POST['tahun_lulus'];
   

    // cek user
    $cek_nim_alumni = mysqli_query($CONNECT, "Select id_mahasiswa from data_alumni where id_mahasiswa='".$nim."' ");
    if (mysqli_num_rows($cek_nim_alumni) > 0) {
        # code...
        $_SESSION['message'] = '<div class="alert alert-danger ml-3 mr-3 mt-3">
                              <span><b>DATA Alumni Sudah Terdaftar</b></span>
                              </div>';
                              echo '<script>window.location = "'.$url.'?page=data";</script>';
    } else {
        $simpan_alumni_data = mysqli_query($CONNECT, "insert into data_alumni (id_mahasiswa, nama, tempat_lahir, tgl_lahir, alamat, tahun_masuk, tahun_lulus) values ('".$nim."','".$nama."','".$lahir."','".$tanggal."','".$alamat."','".$tahun_masuk."','".$tahun_lulus."') ");
        
        if (!$simpan_alumni_data) {
          $_SESSION['message'] = '<div class="alert alert-danger ml-3 mr-3 mt-3">
                                  <span><b>DATA Tidak Tersimpan</b></span>
                                  </div>';
                                  echo '<script>window.location = "'.$url.'?page=data";</script>';
        } else {
            $_SESSION['message'] = '<div class="alert alert-success ml-3 mr-3 mt-3">
                                  <span><b>DATA Berhasil di Tambahkan</b></span>
                                  </div>';
                                  echo '<script>window.location = "'.$url.'?page=data";</script>';
        }
    }
    mysqli_close($CONNECT); 
    }



?>