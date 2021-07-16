<!DOCTYPE html>
<html lang="en">

<?php
  // dev mode 
  // error_reporting(0);

  include_once "config.php";
  include_once "components/header.php";
?>

<?php

  if (empty($_SESSION['user'])) {
    $_SESSION['user'] = "tamu";
  }

  // handle page
  if (empty($_GET['page'])) {
    echo '<script>window.location = "'.$url.'?page=home";</script>';
  }

  $action = $_GET['page'];  
  $home = $url."?page=home";

  if ($_SESSION['user'] == "admin") {
    switch ($action) {
      case 'cari'                           : include_once "page/cari.php" ; break;
      case 'tambah'                         : include_once "page/tambahUser.php" ; break;
      case 'data'                           : include_once "page/data.php" ; break;
      case 'profil'                         : include_once "page/profil.php" ; break;
      case 'listuser'                       : include_once "page/listuser.php" ; break;
      case 'listdata'                       : include_once "page/listalumni.php" ; break;
      case 'hapus'                          : include_once "page/hapus.php" ; break;
      case 'control'                        : include_once "page/controller.php" ; break;
      case 'home'                           : include_once "page/index.php" ; break;
      case 'editUser'                       : include_once "page/edit_profil.php" ; break;
      
      default                         : include_once "page/index.php"; break;
    }
  } else if($_SESSION['user'] == "user"){
    switch ($action) {
      case 'cari'                           : include_once "page/cari.php" ; break;
      case 'data'                           : include_once "page/data.php" ; break;
      case 'profil'                         : include_once "page/profil.php" ; break;
      case 'listdata'                       : include_once "page/listalumni.php" ; break;
      case 'hapus'                          : include_once "page/hapus.php" ; break;
      case 'control'                        : include_once "page/controller.php" ; break;
      case 'home'                           : include_once "page/index.php" ; break;
      case 'editUser'                       : include_once "page/edit_profil.php" ; break;

      
      default                         : include_once "page/index.php" ; break;
    }
  } else {
    switch ($action) {
      case 'home'                           : include_once "page/index.php" ; break;
      case 'cari'                           : include_once "page/cari.php" ; break;
      case 'control'                        : include_once "page/controller.php" ; break;
      case 'login'                          : include_once "page/login.php" ; break;
      
      default                         : include_once "page/index.php" ; break;
    }
  }
  
  include "components/script.php";
?>



</html>